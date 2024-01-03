<?php

namespace App\Livewire\User;

use App\Models\Kategori;
use App\Models\Kelompok as ModelsKelompok;
use Livewire\Component;

class Kelompok extends Component
{
    public function render()
    {
        $post = Kategori::orderBy('id', 'desc')->get();
        $kelompok = ModelsKelompok::all();
        return view('livewire.user.kelompok', compact('post', 'kelompok'));
    }
}
