<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('blog.blog', compact('posts'));
    }
    public function view(Request $request, $slug) {
        $post = Post::where('slug', $slug)->first();
        return view('blog.post', compact('post'));
    }
}
