<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view("services.index", ["services" => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "image" => "required",
            "content" => "required",
        ]);

        Service::create($validated);

        return to_route("services.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view("services.show", compact($service));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view("services.edit", compact($service));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "image" => "required",
            "content" => "required",
        ]);
        $service->update($validated);
        return to_route("services.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route("services.index");
    }
}
