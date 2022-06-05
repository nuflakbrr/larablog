<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'singlePost']);

Route::get('/snippets', function () {
    return view('snippets', [
        'path' => '/snippets',
        'title' => 'Cuplikan Kode -',
    ]);
});

Route::get('/tags', [CategoryController::class, 'index']);

Route::get('/tags/{category:slug}', [CategoryController::class, 'singleCategory']);

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
