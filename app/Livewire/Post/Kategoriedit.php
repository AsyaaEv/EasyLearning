<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Kategoriedit extends Component
{
    use WithFileUploads;
    public $id;
    public $data;
    public $mapel;
    public $tumbnail;
    public $cover;
    public function render()
    {
        $this->data = Kategori::find($this->id);
        $this->mapel = $this->data->mapel;
        $this->tumbnail = $this->data->cover;
        return view('livewire.post.kategoriedit');
    }


    public function editKategori(){
        $post = $this->data;
        $post->mapel = $this->mapel;
        if($this->cover == null){
            $this->cover = $this->tumbnail;
            $post->cover = $this->cover;
        } else {
            $gambar = $this->cover->store('cover', 'public');
            $post->cover = $gambar;
            if (Storage::exists('public/'.$this->tumbnail)) {
                Storage::delete('public/'.$this->tumbnail);
            }
        }
        $post->update();
        return redirect('/dashboard');
    }
}
