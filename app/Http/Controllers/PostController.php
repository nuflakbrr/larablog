<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Check search query
        // dd(request('search'));

        return view('blog', [
            'path' => '/blog',
            'title' => 'Catatan -',
            'posts' => Post::latest()->filter(request(['search']))->paginate(6)->withQueryString()
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
