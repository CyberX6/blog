<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('title', Setting::first()->site_name)
            ;
    }
}
