<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;  
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;
    public $title;
    public $kategory;
    public $content;
    public $image;
    public function render()
    {
        return view('livewire.post.add');
    }

    public function save(){
        $input = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'kategory' => 'required',
            'image' => 'required|max:7000|image'
        ]);
        $post = new Post();
        $post->title = $this->title;
        $post->content = $this->content;
        $post->kategory = $this->kategory;
        
        $gambar = $this->image->store('images', 'public');
        $post->image = $gambar;
        try{
            $post->save();
            session()->flash('msg', __('Post Saved Successfully'));
            session()->flash('alert', 'success');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');

        }
    }
}
