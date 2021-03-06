<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('settings', Setting::first())
            ->with('categories', Category::all()->take(5))
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('other_posts', Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get());
    }

    public function single($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')
            ->with('post', $post)
            ->with('title', $post->title)
            ->with('categories', Category::take(5)->get())
            ->with('settings', Setting::first())
            ->with('prev', Post::find($prev_id))
            ->with('next', Post::find($next_id));
    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')
            ->with('category', $category)
            ->with('title', $category->name)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get());
    }

    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')
            ->with('tag', $tag)
            ->with('title', $tag->tag)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get());
    }
}
