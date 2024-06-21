<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Jemaat;
use App\Models\Schedule;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $schedules = Schedule::all();
    return view('index',compact("schedules"));
})->name("index");

// Restricted Routes
Route::middleware("auth:sanctum")->group(function() {

    // Restricted Schedules 
    Route::get("/schedules/edit/{schedule}",[ScheduleController::class,"edit"])->name("schedules.edit");
    Route::put("/schedules/{schedule}",[ScheduleController::class,"update"])->name("schedules.update");
    Route::delete("/schedules/{schedule}",[ScheduleController::class,"destroy"])->name("schedules.destroy");
    Route::get("/schedules/create",[ScheduleController::class,"create"])->name("schedules.create");
    Route::post("/schedules",[ScheduleController::class,"store"])->name("schedules.store");

    // Restricted Categories 
    Route::get("/categories/edit/{category}",[CategoryController::class,"edit"])->name("categories.edit");
    Route::put("/categories/{category}",[CategoryController::class,"update"])->name("categories.update");
    Route::delete("/categories/{category}",[CategoryController::class,"destroy"])->name("categories.destroy");
    Route::get("/categories/create",[CategoryController::class,"create"])->name("categories.create");
    Route::post("/categories",[CategoryController::class,"store"])->name("categories.store");
    
    // Restricted Categories 
    Route::get("/blogs/edit/{blog}",[BlogController::class,"edit"])->name("blogs.edit");
    Route::put("/blogs/{blog}",[BlogController::class,"update"])->name("blogs.update");
    Route::delete("/blogs/{blog}",[BlogController::class,"destroy"])->name("blogs.destroy");
    Route::get("/blogs/create",[BlogController::class,"create"])->name("blogs.create");
    Route::post("/blogs",[BlogController::class,"store"])->name("blogs.store");

    // Restricted Services
    Route::get("/services/edit/{service}",[ServiceController::class,"edit"])->name("services.edit");
    Route::put("/services/{service}",[ServiceController::class,"update"])->name("services.update");
    Route::delete("/services/{service}",[ServiceController::class,"destroy"])->name("services.destroy");
    Route::get("/services/create", [ServiceController::class, "create"])->name("services.create");
    Route::post("/services", [ServiceController::class, "store"])->name("services.store");

    // Restricted Jemaats
    Route::get("/jemaats/edit/{jemaat}",[JemaatController::class,"edit"])->name("jemaats.edit");
    Route::put("/jemaats/{jemaat}",[JemaatController::class,"update"])->name("jemaats.update");
    Route::delete("/jemaats/{jemaat}",[JemaatController::class,"destroy"])->name("jemaats.destroy");
    Route::get("/jemaats/create", [JemaatController::class, "create"])->name("jemaats.create");
    Route::post("/jemaats", [JemaatController::class, "store"])->name("jemaats.store");

    Route::get("/dashboard/home",function() {
        $schedules = Schedule::all();
        $services = Service::all();
        return view("dashboard.home",["schedules" => $schedules,"services" => $services]);
    })->name("dashboard.home");

    Route::get("/dashboard/schedules",function() {
        $schedules = Schedule::all();
        return view("dashboard.schedules",compact("schedules"));
    })->name("dashboard.schedules");

    Route::get("/dashboard/categories",function() {
        $categories = Category::all();
        return view("dashboard.categories",compact("categories"));
    })->name("dashboard.categories");

    Route::get("/dashboard/blogs",function() {
        $blogs = Blog::all();
        return view("dashboard.blogs",compact("blogs"));
    })->name("dashboard.blogs");

    Route::get("/dashboard/services",function() {
        $services = Service::all();
        return view("dashboard.services",compact("services"));
    })->name("dashboard.services");

    Route::get("/dashboard/jemaat",function() {
        $jemaats = Jemaat::all();
        return view("dashboard.jemaats",compact("jemaats"));
    })->name("dashboard.jemaats");

    Route::post("/logout",[UserController::class,"logout"])->name("logout");

});

// Jemaat
Route::get("/jemaats", [JemaatController::class, "index"])->name("jemaats.index");
Route::get("/jemaats/{jemaat}", [JemaatController::class, "show"])->name("jemaats.show");

// Services
Route::get("/services", [ServiceController::class, "index"])->name("services.index");
Route::get("/services/{service:slug}", [ServiceController::class, "show"])->name("services.show");

// schedules
Route::get("/schedules",[ScheduleController::class,"index"])->name("schedules.index");
Route::get("/schedules/{schedule}",[ScheduleController::class,"show"])->name("schedules.show");

// Blogs
Route::get("/blogs",[BlogController::class,"index"]);
Route::get("/blogs/{blog:slug}",[BlogController::class,"show"])->name("blogs.show");

// Contact
Route::post("/contact",[ContactController::class,"store"])->name("contact.store");

// Authentication
Route::get("/register", [UserController::class, "showRegister"])->name("register");
Route::post("/register", [UserController::class, "register"])->name("register.store");
Route::get("/login", [UserController::class, "showLogin"])->name("login");
Route::post("/login", [UserController::class, "login"])->name("login.store");
