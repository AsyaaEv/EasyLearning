<?php

namespace App\Livewire\User;

use App\Models\Kategori;
use App\Models\Kelompok as ModelsKelompok;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Kelompok extends Component
{
    public $data;
    public $foto;
    public function render()
    {
        $post = Kategori::orderBy('id', 'desc')->get();
        $kelompok = ModelsKelompok::all();
        return view('livewire.user.kelompok', compact('post', 'kelompok'));
    }

    public function deleteanggota($id)
    {
        $this->data = ModelsKelompok::find($id);
        $this->foto = $this->data->foto;
        if (Storage::exists('public/'.$this->foto)) {
            Storage::delete('public/'.$this->foto);
        }
        $this->data->delete();
    }
}
