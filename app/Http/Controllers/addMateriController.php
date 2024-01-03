<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Mapel;
use DOMDocument;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class addMateriController extends Controller
{

    public function index(){
        $data = Kategori::all();
        return view('livewire.post.materiadd', compact('data'));
    }
    public function edit($id)
    {
        $data = Mapel::find($id);
        $dataKategori = Kategori::all();
        return view('livewire.post.materiedit',compact('data', 'dataKategori'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required'
        ]);
        $data = Kategori::where('mapel',$request->kategori)->get();
        $post = $data->first()->cover;
        $description = $request->content;
 
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);
 
        $images = $dom->getElementsByTagName('img');
 
        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);
 
            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();

 
        Mapel::create([
            'judul' => $request->judul,
            'content' => $description,
            'kategori' => $request->kategori,
            'tumbnail' => $post,
        ]);
 
        return redirect('/dashboard');
    }

    public function update(Request $request, $id)
    {
        $post = Mapel::find($id);
 
        $data = Kategori::where('mapel',$request->kategori)->get();
        $tumbnail = $data->first()->cover;
        $description = $request->content;
 
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);
 
        $images = $dom->getElementsByTagName('img');
 
        foreach ($images as $key => $img) {
 
            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
               
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                 
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }
 
        }
        $description = $dom->saveHTML();
 
        $post->update([
            'judul' => $request->judul,
            'content' => $description,  
            'kategori' => $request->kategori,
            'tumbnail' => $tumbnail,
        ]);
 
        return redirect('/dashboard');
 
    }

    public function destroy($id)
    {
        $post = Mapel::find($id);
         
        $dom= new DOMDocument();
        $dom->loadHTML($post->content,9);
        $images = $dom->getElementsByTagName('img');
 
        foreach ($images as $key => $img) {
             
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');
 
 
            if (File::exists($path)) {
                File::delete($path);
                
            }
        }
 
        $post->delete();
        return redirect()->back();
    }
}
