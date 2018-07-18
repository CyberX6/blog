<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
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
}
