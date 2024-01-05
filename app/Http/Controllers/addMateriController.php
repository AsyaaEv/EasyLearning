<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Mapel;
use DOMDocument;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class addMateriController extends Controller
{
    public $post;
    public function index($id){
        $data = Kategori::all();
        $this->post = Kategori::find($id);
        $post = $this->post;
        return view('livewire.post.materiadd', compact('data', 'post'));
    }
    public function edit($id)
    {
        $data = Mapel::find($id);
        $kategori = $data->kategori;
        $kategoriMapel = Kategori::where('mapel', $kategori)->first();
        $kategoriID = $kategoriMapel->id;
        $dataKategori = Kategori::all();
        // $id = $dataKategori->id;
        return view('livewire.post.materiedit',compact('data', 'dataKategori', 'kategoriID'));
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            'kategori' => 'required',
            'tumbnail' => 'required',
        ]);
        // $data = Kategori::where('mapel',$request->kategori)->get();
        // $post = $data->first()->cover;

        $tumbnail = $request->tumbnail->store('tumbnail', 'public');
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
            'tumbnail' => $tumbnail,
        ]);

        $id = $request->id;
 
        return redirect('/dashboard/materi/' .$id);
    }

    public function update(Request $request, $id)
    {
        $post = Mapel::find($id);
        $kategori = $post->kategori;
        $data = $post->tumbnail;
        $description = $request->content;
 
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
               
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/upload/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }
 
        }
        $description = $dom->saveHTML();
 
        //tumbnail
        if($request->tumbnail == null){
            $tumbnail = $post->tumbnail;
        } else {
            $tumbnailLama = $post->tumbnail;
            $tumbnail = $request->tumbnail->store('tumbnail','public');
                Storage::delete('public/' . $tumbnailLama);
             $post->tumbnail = $tumbnail;

        }

        //Kategori
        if($request->kategori == null){

            $valueKategori = $kategori;

        } else {
            $valueKategori = $request->kategori;
        }

        $post->update([
            'judul' => $request->judul,
            'content' => $description,  
            'kategori' => $valueKategori,
            'tumbnail' => $tumbnail,
        ]);
 
        $idD = $request->id;
        return redirect('/dashboard/materi/'.$idD);
 
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
