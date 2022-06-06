<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('tags', [
            'path' => '/tags',
            'title' => 'Kategori -',
            'posts' => Category::all()
        ]);
    }

    public function singleCategory(Category $category)
    {
        return view('tag', [
            'path' => '/tags',
            'title' => $category->name . ' -',
            'posts' => $category->post->load('category'),
            'category' => $category->name
        ]);
    }
}
