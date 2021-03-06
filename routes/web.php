<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [PageController::class, 'home']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'singlePost']);

Route::get('/tags', [CategoryController::class, 'index']);
Route::get('/tags/{category:slug}', [CategoryController::class, 'singleCategory']);

Route::get('/project', [PageController::class, 'project']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'auth']);
Route::post('/admin/logout', [LoginController::class, 'logout']);

Route::get('/admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->middleware('auth');

Route::resource('/admin/my-posts', DashboardPostController::class)->middleware('auth');
