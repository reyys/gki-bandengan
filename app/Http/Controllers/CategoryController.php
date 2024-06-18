<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("categories.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:4|max:255",
        ]);

        Category::create($validated);
        toastr()->success('Kategori berhasil dibuat !');
        return to_route("dashboard.categories");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view("categories.show",compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            "name" => "required|min:4|max:255",
        ]);
        $category->update($validated);
        toastr()->success('Kategori berhasil diubah !');
        return to_route("dashboard.categories");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        toastr()->success('Kategori berhasil dihapus !');
        return to_route("dashboard.categories");
    }
}
