<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use App\Models\Mapel;
use Livewire\Component;

class Detail extends Component
{
    public $mapel;
    public $cover;
    public $tumbnail;
    public $data;
    public $icon;
    public $id;
    public $empty;
    public $keyword;

    public function render()
    {
         $post = Mapel::where('kategori', $this->mapel)->orderBy('id', 'desc')->get();
        $data = Kategori::where('mapel', $this->mapel)->get();
        return view('livewire.post.detail', compact('post','data'));
    }
    public function mount(){
        
        $this->data = Kategori::find($this->id);
        if(!empty($this->data)){
            $this->mapel = $this->data->mapel;
            $this->cover = $this->data->cover;
            $this->icon = $this->data->icon;
            $this->tumbnail = $this->data->tumbnail;
        } else {
            $this->empty = true;
            session()->flash('msg', 'Data Not Found!');
            session()->flash('alert', 'danger');
        }
    }
}
