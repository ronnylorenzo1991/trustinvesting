<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(10);

        if (!Auth::user()->hasRole('administrator'))
        {
            $posts = Post::where('user_id', Auth::user()->id)->paginate(10);
        }

        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'slug'        => 'required|unique:posts',
            'extract'     => 'required|unique:posts',
            'category_id' => 'required',
            'tags'        => 'required',
            'body'        => 'required',
            'user_id'     => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('posts', $imageName);
            $image = new Image;
            $image->url = 'images/blog/post/' . $imageName;
        }

        $post = Post::create($request->all());
        $post->tags()->attach($request->get('tags'));
        $post->image()->save($image ?: '');
        return redirect(route('admin.post.index', $post))->with('info', 'the post was created');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all()->pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Post                     $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name'        => 'required',
            'slug'        => "required|unique:posts,slug,$post->id",
            'extract'     => "required|unique:posts,extract,$post->id",
            'category_id' => 'required',
            'tags'        => 'required',
            'body'        => 'required',
            'user_id'     => 'required',
        ]);
        if ($request->hasFile('image')) {
            $request->validate([
                'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('posts', $imageName);
            $image = new Image;
            $image->url = 'images/blog/post/' . $imageName;
            Storage::delete($post->image->url);
            $post->image->delete();
            $post->image()->save($image ?: '');
        }
        $post->update($request->all());
        $post->tags()->sync($request->get('tags'));

        return redirect(route('admin.post.index'))->with('info', 'the post was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image->url);
        $post->image->delete();
        $post->delete();

        return redirect(route('admin.post.index'))->with('info', 'the post was deleted');
    }
}
