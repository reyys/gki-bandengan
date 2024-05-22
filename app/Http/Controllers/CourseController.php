<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessMail;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schedule;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view("courses.index",["courses" => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
            "description" => "required|min:4|max:255",
            "image" => "required|image"
        ]);

        $validated["user_id"] = auth()->id();
        $validated["image"] = $request->file("image")->store("images");

        Course::create($validated);


        return to_route("courses.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
        return view("/courses.show", ["course" => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        Gate::authorize("update",$course);
        return view("courses.edit", ["course" => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "description" => "required|min:20|max:1000"
        ]);

        $course->update($validated);
        return to_route("courses.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return to_route("courses.index");
    }
}
