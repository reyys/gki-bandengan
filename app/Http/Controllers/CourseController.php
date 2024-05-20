<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        //
        return view("courses.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("courses.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "description" => "required|min:20|max:1000"
        ]);

        Course::create([
            "title" => $request->title,
            "description" => $request->description,
        ]);

        return to_route("courses.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
