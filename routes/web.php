<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DEFAULT ROUTE

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'path' => '/',
        'title' => '',
    ]);
});

Route::get('/blog', function () {
    // Dummy data blog posts
    $blog_posts = [
        [
            "title" => "Blog post 1",
            "slug" => "blog-post-1",
            "date" => "2020-01-01",
            "body" => "Body blog post 1"
        ],
        [
            "title" => "Blog post 2",
            "slug" => "blog-post-2",
            "date" => "2020-01-01",
            "body" => "Body blog post 2"
        ],
        [
            "title" => "Blog post 3",
            "slug" => "blog-post-3",
            "date" => "2020-01-01",
            "body" => "Body blog post 3"
        ],
        [
            "title" => "Blog post 4",
            "slug" => "blog-post-4",
            "date" => "2020-01-01",
            "body" => "Body blog post 4"
        ],
        [
            "title" => "Blog post 5",
            "slug" => "blog-post-5",
            "date" => "2020-01-01",
            "body" => "Body blog post 5"
        ],
        [
            "title" => "Blog post 6",
            "slug" => "blog-post-6",
            "date" => "2020-01-01",
            "body" => "Body blog post 6"
        ],
    ];

    return view('blog', [
        'path' => '/blog',
        'title' => 'Catatan -',
        'posts' => $blog_posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    // Dummy data blog posts
    $blog_posts = [
        [
            "title" => "Blog post 1",
            "slug" => "blog-post-1",
            "date" => "2020-01-01",
            "body" => "Body blog post 1"
        ],
        [
            "title" => "Blog post 2",
            "slug" => "blog-post-2",
            "date" => "2020-01-01",
            "body" => "Body blog post 2"
        ],
        [
            "title" => "Blog post 3",
            "slug" => "blog-post-3",
            "date" => "2020-01-01",
            "body" => "Body blog post 3"
        ],
        [
            "title" => "Blog post 4",
            "slug" => "blog-post-4",
            "date" => "2020-01-01",
            "body" => "Body blog post 4"
        ],
        [
            "title" => "Blog post 5",
            "slug" => "blog-post-5",
            "date" => "2020-01-01",
            "body" => "Body blog post 5"
        ],
        [
            "title" => "Blog post 6",
            "slug" => "blog-post-6",
            "date" => "2020-01-01",
            "body" => "Body blog post 6"
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    };

    return view('post', [
        'path' => '/blog',
        'title' => $slug,
        'post' => $new_post
    ]);
});

Route::get('/project', function () {
    return view('project', [
        'path' => '/project',
        'title' => 'Portofolio -',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'path' => '/about',
        'title' => 'Tentang -',
    ]);
});
