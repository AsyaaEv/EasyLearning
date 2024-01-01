<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use App\Models\Mapel;
use Livewire\Component;

class Mapeldetail extends Component
{
    public $id;
    public $data;
    public $mapel;
    public function render()
    {
        $post = Mapel::where('id', $this->id)->get();
        return view('livewire.post.mapeldetail', compact('post'));
    }
}
