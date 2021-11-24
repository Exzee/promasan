<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('partials.destinasi-wisata', [
            "title" => "All Post",
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->paginate()
        ]);
    }

    public function index2()
    {
        return view('partials.home', [
            "title" => "Post",
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->paginate(3)
        ]);
    }


    public function show(Post $post)
    {
        return view('partials.detail-artikel',[
            "post" => $post
        ]);
    }

    public function show_lokasi(Category $category)
    {
        return view('partials.destinasi-wisata', [
        'title' => "Lokasi Dusun $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
    }
}
