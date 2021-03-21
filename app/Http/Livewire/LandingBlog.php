<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class LandingBlog extends Component
{

    private $quatity = 3;

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->take($this->quatity)->get();
        return view('livewire.landing-blog', compact('posts'));
    }
}
