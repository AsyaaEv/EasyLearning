<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use App\Models\Mapel;
use Livewire\Component;

class Materi extends Component
{
    public $id;
    public function render()
    {
        $data = Kategori::find($this->id);
        $dataID = $data->id;
        $mapel = $data->mapel;
        $post = Mapel::where('kategori', $mapel)->orderBy('id', 'desc')->get();
        $data = Kategori::orderBy('id', 'desc')->get();

        foreach($post as $item){
            $tanggal = $item->created_at;
            $tgl = $tanggal->format('j F Y');
        }
        return view('livewire.post.materi', compact('post', 'mapel','data','dataID', 'tgl'));
    }
}
