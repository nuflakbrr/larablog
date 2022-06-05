<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            'path' => '/blog',
            'title' => 'Catatan -',
            'posts' => Post::all()
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('post', [
            'path' => '/blog',
            'title' => $post->title . ' -',
            'post' => $post
        ]);
    }
}
