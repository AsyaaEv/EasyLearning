<?php

namespace App\Livewire\Post;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.post.login');
    }

    public $username;
    public $password;
    public function login(){
        $this->Validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $validCredentials = ($this->username === 'iqbal' && $this->password === '12345');

        if ($validCredentials) {
            Auth::loginUsingId(1); 
            return redirect('/dashboard');
        } else {
            session()->flash('msg', 'Username or password wrong!');
            session()->flash('alert', 'danger');
        }
    }
}
