<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-thumbnail');
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image_thumbnail' => 'image|file|max:1024|',
            'image_post_satu' => 'image|file|max:2048|',
            'image_post_dua' => 'image|file|max:2048|',
            'image_post_tiga' => 'image|file|max:2048|',
            'body' => 'required'
        ]);

        if($request->file('image_thumbnail')){
            $validatedData['image_thumbnail'] = $request->file('image_thumbnail')->store('post-thumbnail');
        }
        if($request->file('image_post_satu')){
            $validatedData['image_post_satu'] = $request->file('image_post_satu')->store('post-postingan');
        }
        if($request->file('image_post_dua')){
            $validatedData['image_post_dua'] = $request->file('image_post_dua')->store('post-postingan');
        }
        if($request->file('image_post_tiga')){
            $validatedData['image_post_tiga'] = $request->file('image_post_tiga')->store('post-postingan');
        }
        
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerp'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success','Postingan Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
       }
        return view('dashboard.posts.show',[
            'post' => $post 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
       }
        return view('dashboard.posts.edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image_thumbnail' => 'image|file|max:1024|',
            'image_post_satu' => 'image|file|max:2048|',
            'image_post_dua' => 'image|file|max:2048|',
            'image_post_tiga' => 'image|file|max:2048|',
            'body' => 'required'
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        // UPLOAD IMAGE SETELAH VALIDASI
        if($request->file('image_thumbnail')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_thumbnail'] = $request->file('image_thumbnail')->store('post-thumbnail');
        }
        if($request->file('image_post_satu')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_post_satu'] = $request->file('image_post_satu')->store('post-postingan');
        }
        if($request->file('image_post_dua')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_post_dua'] = $request->file('image_post_dua')->store('post-postingan');
        }
        if($request->file('image_post_tiga')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_post_tiga'] = $request->file('image_post_tiga')->store('post-postingan');
        }
        // UPLOAD IMAGE END
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerp'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
        ->update($validatedData);

        

        return redirect('/dashboard/posts')->with('success','Postingan Berhasil Dirubah');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Postingan Berhasil Dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }
}
