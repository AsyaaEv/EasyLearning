<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use App\Models\Mtk;
use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $keyword;
    public function render()
    {
        $posts = Kategori::where('mapel', 'like', '%' . $this->keyword . '%')->paginate(3);
        return view('livewire.post.index', compact('posts'));
    }
}
