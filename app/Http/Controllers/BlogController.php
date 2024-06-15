<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Schedule;
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
        return view("blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            'address' => "required|min:4|max:255",
            'description' => "required|min:4|max:255",
            'pastor' => "required|min:4|max:255",
            "topic" => "required|min:4|max:255",
            "date" => "required",
            "start_time" => "required",
            "end_time" => "required",
        ]);

        Blog::create($validated);

        return to_route("blogs.index");
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
    public function edit(Request $request)
    {
        return view("blogs.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            'address' => "required|min:4|max:255",
            'description' => "required|min:4|max:255",
            'pastor' => "required|min:4|max:255",
            "topic" => "required|min:4|max:255",
            "date" => "required",
            "start_time" => "required",
            "end_time" => "required",
        ]);

        $blog->update($validated);
        return to_route("blogs.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
