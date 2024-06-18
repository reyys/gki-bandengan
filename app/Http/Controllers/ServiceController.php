<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view("services.index", compact("services"));
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
            "content" => "required",
            "image" => "required",
        ]);

        $validated["slug"] = str()->slug($request->title);
        $validated["image"] = $request->file("image")->store("services");

        Service::create($validated);

        toastr()->success("Service berhasil dibuat!");

        return to_route("dashboard.services");
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view("services.show", compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view("services.edit", compact("service"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            "title" => "required|min:4|max:255",
            "content" => "required",
        ]);

        if($request->file != "") {
            $validated["image"] = $request->file("image")->store("services");
        }

        $service->update($validated);
        return to_route("dashboard.services");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        toastr()->success('Service berhasil dihapus !');
        return to_route("dashboard.services");
    }
}
