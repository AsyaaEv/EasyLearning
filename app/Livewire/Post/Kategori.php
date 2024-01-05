<?php

namespace App\Livewire\Post;

use App\Models\Kategori as ModelsKategori;
use Livewire\Component;

class Kategori extends Component
{
    public $keyword;
    public function render()
    {
        $posts = ModelsKategori::paginate(6);
        foreach($posts->items() as $item){
            $tanggal = $item->created_at;
            $tgl = $tanggal->format('j F Y');
        }
        return view('livewire.post.kategori', compact('posts', 'tgl'));
    }
}
