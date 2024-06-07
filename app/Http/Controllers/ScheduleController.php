<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();
        return view("schedules.index",["schedules" => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("schedules.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "topic" => "required|min:4|max:255",
            "date" => "required",
            "start_time" => "required",
            "end_time" => "required",
        ]);

        Schedule::create($validated);

        return to_route("schedules.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        return view("schedules.show",compact($schedule));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return view("schedules.edit",compact($schedule));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "topic" => "required|min:20|max:1000",
            "date" => "required",
            "start_time" => "required",
            "end_time" => "required",
        ]);
        $schedule->update($validated);
        return to_route("schedules.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return to_route("schedules.index");
    }
}
