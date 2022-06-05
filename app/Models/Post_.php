<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Blog post 1",
            "slug" => "blog-post-1",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 1"
        ],
        [
            "title" => "Blog post 2",
            "slug" => "blog-post-2",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 2"
        ],
        [
            "title" => "Blog post 3",
            "slug" => "blog-post-3",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 3"
        ],
        [
            "title" => "Blog post 4",
            "slug" => "blog-post-4",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 4"
        ],
        [
            "title" => "Blog post 5",
            "slug" => "blog-post-5",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 5"
        ],
        [
            "title" => "Blog post 6",
            "slug" => "blog-post-6",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 6"
        ],
        [
            "title" => "Blog post 7",
            "slug" => "blog-post-7",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 7"
        ],
        [
            "title" => "Blog post 8",
            "slug" => "blog-post-8",
            "author" => "Naufal Akbar Nugroho",
            "date" => "2020-01-01",
            "body" => "Body blog post 8"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
