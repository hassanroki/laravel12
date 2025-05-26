<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo
Route::get('/demo', function () {
    return view('demo');
});

Route::get('/about', function () {
    return view('aboutus');
});

// Student Contrller
// Route::get('/about-us', [StudentController::class, 'about']);
// Route::get('/index', [StudentController::class, 'index']);
Route::controller(StudentController::class)->group(function () {
    Route::get('/about-us', 'about');
    Route::get('/index', 'index');
});
