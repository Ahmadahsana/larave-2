<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest();
        if (request('search')) {
            $post->where('title', 'like', '%' . request('search') . '%')
                ->orwhere('body', 'like', '%' . request('search') . '%');
        }
        return view('posts', [
            'title' => 'posts',
            // 'posts' => Post::all()
            'posts' => $post->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'post',
            'post' => $post
        ]);
    }
}
