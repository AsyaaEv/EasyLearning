<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $kategory;
    public $image;
    public $data;
    public $postId;
    public $empty;
    public function mount(){
        $this->data = Post::find($this->postId);
        if(!empty($this->data)){
            $this->title = $this->data->title;
            $this->content = $this->data->content;
            $this->kategory = $this->data->kategory;
            $this->image = $this->data->image;
        } else {
            $this->empty = true;
            session()->flash('msg', 'Data Not Found!');
            session()->flash('alert', 'danger');
        }
    }

    public function render()
    {
        return view('livewire.post.edit');
    }

    public function save(){
        $input = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|max:1024'
        ]);
        $post = $this->data;
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
