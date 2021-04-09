<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequestUpdate;
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

        if (!Auth::user()->hasRole('administrator')) {
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
            'name_es'     => 'required',
            'slug'        => 'required|unique:posts',
            'extract_es'  => 'required',
            'category_id' => 'required',
            'tags'        => 'required',
            'body_es'     => 'required',
            'user_id'     => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images/posts', $imageName);
            $image = new Image;
            $image->url = 'storage/images/posts/' . $imageName;
        }

        $post = Post::create($this->prepareFieldsForCreate($request->all()));
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
        $post = $this->prepareFieldsForShow($post);
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequestUpdate $request, Post $post)
    {

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images/posts', $imageName);
            $image = new Image;
            $image->url = 'storage/images/posts/' . $imageName;
            Storage::delete($post->image->url);
            $post->image->delete();
            $post->image()->save($image ?: '');
        }

        $post->update($this->prepareFieldsForCreate($request->all()));
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

    public function prepareFieldsForCreate($request)
    {
        $name = [
            'es' => $request['name_es'],
            'en' => $request['name_en'],
            'ch' => $request['name_ch'],
        ];
        $extract = [
            'es' => $request['extract_es'],
            'en' => $request['extract_en'],
            'ch' => $request['extract_ch'],
        ];
        $body = [
            'es' => $request['body_es'],
            'en' => $request['body_en'],
            'ch' => $request['body_ch'],
        ];
        $request['name'] = json_encode($name);
        $request['extract'] = json_encode($extract);
        $request['body'] = json_encode($body);

        return $request;
    }

    public function prepareFieldsForShow($post)
    {
        $arrayNames = (array)json_decode($post->name);
        $arrayExtract = (array)json_decode($post->extract);
        $arrayBody = (array)json_decode($post->body);

        $post['name_es'] = $arrayNames['es'];
        $post['name_en'] = $arrayNames['en'];
        $post['name_ch'] = $arrayNames['ch'];

        $post['extract_es'] = $arrayExtract['es'];
        $post['extract_en'] = $arrayExtract['en'];
        $post['extract_ch'] = $arrayExtract['ch'];

        $post['body_es'] = $arrayBody['es'];
        $post['body_en'] = $arrayBody['en'];
        $post['body_ch'] = $arrayBody['ch'];

        return $post;
    }
}
