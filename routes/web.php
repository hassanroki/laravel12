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

// Teacher
Route::prefix('/teacher')->controller(TeacherController::class)->group(function () {
    Route::get('/', 'index')->name('teacher.index');
});

// Country
Route::get('/country-list', [CountryController::class, 'list']);
