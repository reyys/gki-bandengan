<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticatedMiddleware;
use App\Http\Middleware\Authorized;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Restricted Routes
Route::middleware([AuthenticatedMiddleware::class])->group(function() {
    Route::get("/courses/{course}/{edit}",[CourseController::class,"edit"])->name("courses.edit");
    Route::put("/courses/{course}",[CourseController::class,"update"])->name("courses.update");
    Route::delete("/courses/{course}",[CourseController::class,"destroy"])->name("courses.destroy");
    Route::post("/logout",[UserController::class,"logout"])->name("logout");
});

// Accessible Routes 
Route::get("/courses",[CourseController::class,"index"])->name("courses.index");
Route::get("/courses/create",[CourseController::class,"create"])->name("courses.create");
Route::post("/courses",[CourseController::class,"store"])->name("courses.store");
Route::get("/courses/{course}",[CourseController::class,"show"])->name("courses.show");
Route::get("/register",[UserController::class,"register"])->name("register");
Route::post("/register",[UserController::class,"registerStore"])->name("register.store");
Route::get("/login",[UserController::class,"login"])->name("login");
Route::post("/login",[UserController::class,"loginStore"])->name("login.store");

