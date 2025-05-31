<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo
Route::get('/demo', function () {
    return view('demo');
});

// Route::get('/about', function () {
//     return view('aboutus');
// });

// Student Contrller
Route::get('/about-us/{name}/{id}', [StudentController::class, 'about']);
// Route::get('/index', [StudentController::class, 'index']);
Route::controller(StudentController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/about-us', 'about');
});

// Invoke
Route::get('/invoke', TestController::class);

// Resources
Route::resource('/second-test', SecondTestController::class);

// Teachers
Route::get('/teachers', [TeacherController::class, 'getData']);
Route::get('/teachers-add', [TeacherController::class, 'add']);
Route::get('/teachers-update', [TeacherController::class, 'update']);
Route::get('/teachers-destroy', [TeacherController::class, 'destroy']);

// Country
Route::get('/country-list', [CountryController::class, 'list']);
