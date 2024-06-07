<?php

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticatedMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

// Restricted Routes
Route::middleware([AuthenticatedMiddleware::class])->group(function() {
    Route::get("/schedules/{schedule}/{edit}",[ScheduleController::class,"edit"])->name("schedules.edit");
    Route::put("/schedules/{schedule}",[ScheduleController::class,"update"])->name("schedules.update");
    Route::delete("/schedules/{schedule}",[ScheduleController::class,"destroy"])->name("schedules.destroy");
    Route::post("/logout",[UserController::class,"logout"])->name("logout");
});

// schedules
Route::get("/schedules",[ScheduleController::class,"index"])->name("schedules.index");
Route::get("/schedules/create",[ScheduleController::class,"create"])->name("schedules.create");
Route::post("/schedules",[ScheduleController::class,"store"])->name("schedules.store");
Route::get("/schedules/{schedule}",[ScheduleController::class,"show"])->name("schedules.show");

// Blogs
Route::get("/blogs",function () {
    return view("blogs.index");
})->name("blogs.index");

// Contact
Route::get("/contact",function () {
    return view("contact.index");
})->name("contact.index");

// Authentication
Route::get("/register",[UserController::class,"register"])->name("register");
Route::post("/register",[UserController::class,"registerStore"])->name("register.store");
Route::get("/login",[UserController::class,"login"])->name("login");
Route::post("/login",[UserController::class,"loginStore"])->name("login.store");

