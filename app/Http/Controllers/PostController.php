<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(10);

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $related = Post::where('category_id', $post->category_id)
            ->where('status', 2)
            ->where('id','!=', $post->id)
            ->latest('id')
            ->get();

        return view('post.show', compact('post', 'related'));
    }
}
