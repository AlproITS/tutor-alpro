<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', 22)->get();
        return view('index', compact('posts'));
    }

    public function about()
    {
        return view('about');
    }
}
