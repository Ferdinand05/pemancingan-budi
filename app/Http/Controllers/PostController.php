<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('post.index', ['posts' => Post::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ['categories' => Category::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {


        if ($request->file('body_image')) {
            $image = $request->file('body_image')->store('content-image');
        } else {
            $image = null;
        }

        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . "-" . Str::random(10),
            'category_id' => $request->category,
            'image' => $image,
            'body' => $request->body
        ]);

        return back()->with('success', 'Post has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        return view('post.show', ['post' => Post::whereSlug($slug)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {

        return view('post.edit', ['post' => Post::whereSlug($slug)->first(), 'categories' => Category::get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $slug)
    {

        $post = Post::whereSlug($slug)->first();
        if ($request->file('body_image' == null)) {
            $image = $post->image;
        } else {
            $image = $request->file('body_image')->store('content-image');
            Storage::delete($post->image);
        }



        Post::whereSlug($slug)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . "-" . Str::random(10),
            'category_id' => $request->category,
            'image' => $image,
            'body' => $request->body
        ]);

        return redirect()->route('posts.index')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);

        return back()->with('fail', 'Post has been destroyed!');
    }
}
