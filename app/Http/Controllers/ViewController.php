<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('nama', 'like', '%' . $request->get('q') . '%')->paginate(4)->withQueryString();
        return view('gallery', [
            "title" => "Gallery",
            "posts" => $posts
        ]);
    }

    public function show($id)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($id)
        ]);
    }
}
