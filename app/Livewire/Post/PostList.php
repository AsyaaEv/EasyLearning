<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PostList extends Component
{
    public $keyword;
    public $cover;
    public $data;
    public function render()
    {
        $post = $this->getData();
        return view('livewire.post.post-list', compact('post'));
    }

    public function getData()
    {
        $data = Kategori::where('mapel', 'like', '%' . $this->keyword . '%')->orderBy('id', 'desc')->get();
        return $data;
    }

    public function deletekategori($id)
    {
        $this->data = Kategori::find($id);
        $this->cover = $this->data->cover;
        if (Storage::exists('public/'.$this->cover)) {
            Storage::delete('public/'.$this->cover);
        }
        $this->data->delete();
    }
}
