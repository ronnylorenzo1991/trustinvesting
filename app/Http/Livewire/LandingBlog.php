<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class LandingBlog extends Component
{

    private $quantity = 3;

    public function render()
    {
        $posts = Post::where('status', '2')->orderBy('id', 'desc')->take($this->quantity)->get();
        return view('livewire.landing-blog', compact('posts'));
    }
}
