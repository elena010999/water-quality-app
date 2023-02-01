<?php

namespace App\Http\Controllers;

use App\Models\Post;

class UserPostController extends Controller
{
    public function index()
    {
        return view('user-post.index', [
            'posts' => Post::orderBy('id', 'DESC')->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('user-post.show', [
            'post' => $post
        ]);
    }

    public function lastThree()
    {
        return view('/news',  [
            'posts' => Post::orderBy('id', 'DESC')->paginate(3)->withQueryString()
        ]);
    }
}
