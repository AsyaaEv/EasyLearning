<?php

namespace App\Livewire\Post;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

use function PHPSTORM_META\map;

class Kategoriadd extends Component
{
    public function render()
    {
        return view('livewire.post.kategoriadd');
    }

    use WithFileUploads;
    public $mapel;
    public $cover;
    public $icon;
    public function submitMapel(){
        $input = $this->validate([
            'mapel' => 'required',
            'cover' => 'required|max:7000|image',
        ]);
        $post = new Kategori();
        $post->mapel = $this->mapel;
        
        $gambar = $this->cover->store('cover', 'public');
        $post->cover = $gambar;
        try{
            $post->save();
            session()->flash('msg', __('Post Saved Successfully'));
            session()->flash('alert', 'success');
            return redirect('/dashboard');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');

        }
    }
}
