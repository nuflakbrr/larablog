<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'path' => '/',
            'title' => '',
        ]);
    }

    public function project()
    {
        return view('project', [
            'path' => '/project',
            'title' => 'Portofolio -',
        ]);
    }

    public function about()
    {
        return view('about', [
            'path' => '/about',
            'title' => 'Tentang -',
        ]);
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'path' => '/admin/dashboard',
            'title' => 'Dashboard -',
        ]);
    }
}
