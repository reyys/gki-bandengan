<?php

namespace App\Http\Controllers;

use App\Models\Jemaat;
use Illuminate\Http\Request;

class JemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jemaats = Jemaat::all();
        return view("jemaats.index", ["jemaats" => $jemaats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jemaats.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "birth_date" => "required",
            "job" => "required",
        ]);

        Jemaat::create($validated);

        return to_route("jemaats.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jemaat $jemaat)
    {
        return view("jemaats.show", compact($jemaat));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jemaat $jemaat)
    {
        return view("jemaats.edit", compact($jemaat));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jemaat $jemaat)
    {
        $validated = $request->validate([
            "name" => "required",
            "birth_date" => "required",
            "job" => "required",
        ]);
        $jemaat->update($validated);
        return to_route("jemaats.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jemaat $jemaat)
    {
        $jemaat->delete();
        return to_route("jemaats.index");
    }
}
