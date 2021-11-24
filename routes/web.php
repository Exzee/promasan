<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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

// Route::get('/', function () {
//     return view('partials.home');
// });

Route::get('/about', function () {
    return view('partials.about');
});


Route::get('/panduan', function () {
    return view('partials.panduan');
});

Route::get('/home', function () {
    return view('layouts.main2');
});

Route::get('/', [PostController::class, 'index2']);
Route::get('/destinasi', [PostController::class, 'index']);

Route::get('/destinasi/{post:slug}', [PostController::class, 'show']);

Route::get('/lokasi', function(){
    return view('partials.lokasi', [
        'title' => 'Wilayah',
        'categories' => Category::all()
    ]);
});

Route::get('/lokasi/{category:slug}', [PostController::class, 'show_lokasi']);
// Route::get('/lokasi/{category:slug}', function(Category $category){
//     return view('partials.destinasi-wisata', [
//         'title' => "Lokasi Dusun $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

Route::get('/authors/{author:username}', function(User $author){
    return view('partials.destinasi-wisata', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function()
{
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/users', AdminUserController::class)->except('show')->middleware('admin');


