<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;

class Index extends Component
{
    public $posts;

    public function mount()
    {
        $this-> posts = Post::all();
       
    }
    public function render()
    {
        return view('livewire.index');
    }
}
