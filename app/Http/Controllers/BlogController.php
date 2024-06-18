<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("blogs.index",compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("blogs.create",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "category_id" => "required",
            "description" => "required|min:4|max:255",
            'image' => 'required',
        ]);
        
        $validated["slug"] = str()->slug($request->title);
        $validated["user_id"] = auth()->id();
        $validated["image"] = $request->file("image")->store("blogs");

        Blog::create($validated);

        return to_route("dashboard.blogs");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view("blogs.show",compact("blog"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Blog $blog)
    {
        $categories = Category::all();
        return view("blogs.edit",["blog" => $blog,"categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "category_id" => "required",
            "description" => "required|min:4|max:255",
        ]);
        
        $validated["slug"] = str()->slug($request->title);

        if($request->file != "") {
            $validated["image"] = $request->file("image")->store("blogs");
        }

        $blog->update($validated);
        return to_route("blogs.show",compact("blog"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        toastr()->success("Blog berhasil dihapus !");
        return to_route("dashboard.blogs");
    }
}
