<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SearchCoursesController;
use Illuminate\Support\Facades\Route;

Route::get("", [HomeController::class, "index"])->name("home");
Route::get("/courses", [SearchCoursesController::class, "index"])->name("allCourses");
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
