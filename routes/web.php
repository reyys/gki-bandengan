<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

// Restricted Routes
Route::middleware("auth:sanctum")->group(function() {
    Route::get("/schedules/create",[ScheduleController::class,"create"])->name("schedules.create");
    Route::get("/schedules/{schedule}/{edit}",[ScheduleController::class,"edit"])->name("schedules.edit");
    Route::put("/schedules/{schedule}",[ScheduleController::class,"update"])->name("schedules.update");
    Route::delete("/schedules/{schedule}",[ScheduleController::class,"destroy"])->name("schedules.destroy");
    Route::post("/logout",[UserController::class,"logout"])->name("logout");

    // Dashboard 
    Route::get("/dashboard/home",function() {
        return view("dashboard.home");
    })->name("dashboard.home");

    Route::get("/dashboard/schedules",function() {
        $schedules = Schedule::all();
        return view("dashboard.schedules",compact("schedules"));
    })->name("dashboard.schedules");

    Route::get("/dashboard/categories",function() {
        return view("dashboard.categories");
    })->name("dashboard.categories");

    Route::get("/dashboard/blogs",function() {
        return view("dashboard.blogs");
    })->name("dashboard.blogs");

    Route::get("/dashboard/services",function() {
        return view("dashboard.services");
    })->name("dashboard.services");

    Route::get("/dashboard/jemaat",function() {
        return view("dashboard.jemaat");
    })->name("dashboard.jemaat");


});

// schedules
Route::get("/schedules",[ScheduleController::class,"index"])->name("schedules.index");
Route::post("/schedules",[ScheduleController::class,"store"])->name("schedules.store");
Route::get("/schedules/{schedule}",[ScheduleController::class,"show"])->name("schedules.show");

// Blogs
Route::get("/blogs",[BlogController::class,"index"]);
Route::get("/blogs/create",[BlogController::class,"create"])->name("blogs.create");
Route::get("/blogs/{blog:slug}",[BlogController::class,"show"])->name("blogs.show");

// Contact
Route::get("/contact",function () {
    return view("contact.index");
})->name("contact.index");

// Authentication
Route::get("/register",[UserController::class,"showRegister"])->name("register");
Route::post("/register",[UserController::class,"register"])->name("register.store");
Route::get("/login",[UserController::class,"showLogin"])->name("login");
Route::post("/login",[UserController::class,"login"])->name("login.store");

