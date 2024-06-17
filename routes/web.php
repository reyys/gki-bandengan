<?php

use App\Http\Controllers\JemaatController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

// Restricted Routes
Route::middleware("auth:sanctum")->group(function () {
    Route::get("/dashboard", function () {
        return view("dashboard.index");
    })->name("dashboard.index");
    Route::get("/schedules/{schedule}/{edit}", [ScheduleController::class, "edit"])->name("schedules.edit");
    Route::put("/schedules/{schedule}", [ScheduleController::class, "update"])->name("schedules.update");
    Route::delete("/schedules/{schedule}", [ScheduleController::class, "destroy"])->name("schedules.destroy");
    Route::post("/logout", [UserController::class, "logout"])->name("logout");
});

// Jemaat
Route::get("/jemaats", [JemaatController::class, "index"])->name("jemaats.index");
Route::get("/jemaats/create", [JemaatController::class, "create"])->name("jemaats.create");
Route::post("/jemaats", [JemaatController::class, "store"])->name("jemaats.store");
Route::get("/jemaats/{jemaat}", [JemaatController::class, "show"])->name("jemaats.show");

// schedules
Route::get("/schedules", [ScheduleController::class, "index"])->name("schedules.index");
Route::get("/schedules/create", [ScheduleController::class, "create"])->name("schedules.create");
Route::post("/schedules", [ScheduleController::class, "store"])->name("schedules.store");
Route::get("/schedules/{schedule}", [ScheduleController::class, "show"])->name("schedules.show");

// Blogs
Route::get("/blogs", [BlogController::class, "index"]);
Route::get("/blogs/{blog:slug}", [BlogController::class, "show"])->name("blogs.show");

// Contact
Route::get("/contact", function () {
    return view("contact.index");
})->name("contact.index");

// Authentication
Route::get("/register", [UserController::class, "showRegister"])->name("register");
Route::post("/register", [UserController::class, "register"])->name("register.store");
Route::get("/login", [UserController::class, "showLogin"])->name("login");
Route::post("/login", [UserController::class, "login"])->name("login.store");
