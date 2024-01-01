<?php

namespace App\Livewire\Post;

use App\Models\Kategori as ModelsKategori;
use Livewire\Component;

class Kategori extends Component
{
    public $keyword;
    public function render()
    {
        $posts = ModelsKategori::paginate(4);
        return view('livewire.post.kategori', compact('posts'));
    }
}
