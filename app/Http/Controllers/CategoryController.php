<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('category.index', ['categories' => Category::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'unique:categories,name', 'string']
        ]);

        Category::create([
            'name' => $request->category,
            'slug' => Str::slug($request->category)
        ]);

        return back()->with('success', 'Category created Successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

        return view('category.show', ['category' => Category::whereSlug($slug)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('category.edit', ['category' => Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => ['required', 'string', 'unique:categories,name,' . $id]
        ]);

        Category::where('id', $id)->update([
            'name' => $request->category,
            'slug' => Str::slug($request->category)
        ]);

        return redirect()->route('category.index')->with('success', 'Category name has been changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return back()->with('danger', 'Category has been deleted!');
    }
}
