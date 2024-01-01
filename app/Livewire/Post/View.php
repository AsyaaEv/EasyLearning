<?php

namespace App\Livewire\Post;

use App\Models\Mapel;
use App\Models\Mtk;
use App\Models\Post;
use Livewire\Component;

class View extends Component
{
    public $judul;
    public $content;
    public $id;
    public $data;
    public $empty;
    public $cover;
    public $created_at;
    public function render()
    {
        return view('livewire.post.view');
    }

    public function mount(){
        $this->data = Mapel::find($this->id);
        if(!empty($this->data)){
            $this->judul = $this->data->judul;
            $this->content = $this->data->content;
            $this->cover = $this->data->cover;
            $this->created_at = $this->data->created_at;
        } else {
            $this->empty = true;
            session()->flash('msg', 'Data Not Found!');
            session()->flash('alert', 'danger');
        }
    }
}
