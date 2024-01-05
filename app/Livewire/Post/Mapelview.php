<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use App\Models\Mapel;
use Livewire\Component;

class Mapelview extends Component
{
    public $id;
    public $keyword;
    public $data;
    public $mapel;
    public function render()
    {
        $this->data = Kategori::find($this->id);
        $this->mapel = $this->data->mapel;
       $post = Mapel::where('kategori', $this->mapel)->where('judul', 'like', '%' . $this->keyword . '%')->get();
       foreach($post as $item){
        $tanggal = $item->created_at;
        $tgl = $tanggal->format('j F Y');
    }
        return view('livewire.post.mapelview', compact('post', 'tgl'));
    }

}
