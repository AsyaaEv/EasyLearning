<?php

namespace App\Livewire\User;

use App\Models\Kelompok;
use Livewire\Component;
use Livewire\WithFileUploads;

class Kelompokadd extends Component
{
    public $fotos;
    public function render()
    {
        return view('livewire.user.kelompokadd');
    }

    use WithFileUploads;
    public $nama;
    public $foto;
    public $role;
    public $username;
    public function submitAnggota(){
        $input = $this->validate([
            'nama' => 'required',
            'role' => 'required',
            'username' => 'required',
            'foto' => 'required|max:7000|image',
        ]);
        $post = new Kelompok();
        $post->nama = $this->nama;
        $gambar = $this->foto->store('images', 'public');
        $post->foto = $gambar;
        $post->role = $this->role;
        $post->username = $this->username;
        try{
            $post->save();
            session()->flash('msg', __('Post Saved Successfully'));
            session()->flash('alert', 'success');
            return redirect('/dashboard/kelompok');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');

        }
    }
}
