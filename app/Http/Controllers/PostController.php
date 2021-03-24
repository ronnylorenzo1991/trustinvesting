<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        SEOTools  ::setTitle ('Blog');
        SEOTools  ::setDescription ('En este blog usted obtendrá lo mas novedoso en temas relacionados con inversiones en criptoactivos');
        OpenGraph ::setDescription ('En este blog usted obtendrá lo mas novedoso en temas relacionados con inversiones en criptoactivos');
        OpenGraph ::setTitle ('Blog');
        OpenGraph ::setUrl ('https://www.trustinvesting.us/blog');
        OpenGraph ::addProperty ('type', 'articles');

        $posts = Post ::where ('status', 2) -> latest ('id') -> paginate (10);

        return view ('post.index', compact ('posts'));
    }

    public function show(Post $post)
    {
        SEOTools  ::setTitle ($post->name);
        SEOTools  ::setDescription ($post->extract);
        OpenGraph ::setDescription ($post->extract);
        OpenGraph ::setTitle ($post->name);
        OpenGraph ::setUrl ('https://www.trustinvesting.us/' . $post->slug);
        OpenGraph ::addProperty ('type', 'articles');

        $related = Post ::where ('category_id', $post -> category_id)
            -> where ('status', 2)
            -> where ('id', '!=', $post -> id)
            -> latest ('id')
            -> get ();

        return view ('post.show', compact ('post', 'related'));
    }
}
