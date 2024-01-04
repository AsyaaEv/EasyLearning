<?php

namespace App\Livewire\User;

use App\Models\Kelompok;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Kelompokedit extends Component
{
    use WithFileUploads;
    public $id;
    public $data;
    public $nama;
    public $role;
    public $username;
    public $tumbnail;
    public $cover;
    public $fotos;
    public $foto;
    public function render()
    {
        $this->data = Kelompok::find($this->id);
        $this->nama = $this->data->nama;
        $this->username = $this->data->username;
        $this->role = $this->data->role;
        $this->foto = $this->data->foto;
        $fotoUser = $this->foto;
        return view('livewire.user.kelompokedit', compact('fotoUser'));
    }

    public function kelompokEdit(){
        
        $post = $this->data;
        $post->nama = $this->nama;
        $post->role = $this->role;
        $post->username = $this->username;


        if($this->cover == null){
            $post->foto = $this->foto;
        } else {
            $gambar = $this->cover->store('images', 'public');
            $post->foto = $gambar;
            if (Storage::exists('public/'.$this->foto)) {
                Storage::delete('public/'.$this->foto);
            }
        }


        $post->update();
        return redirect('/dashboard/kelompok');
    }
}
