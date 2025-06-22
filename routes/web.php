<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TeacherMiddleware;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo
Route::get('/demo', function () {
    return view('demo');
});

// Teacher
Route::prefix('/teacher')
    ->middleware(['auth', 'teachers', 'verified'])
    ->controller(TeacherController::class)
    ->group(function () {
        Route::get('/', 'index')->name('teacher.index');
        Route::get('/add', 'add')->name('teacher.add');
        Route::post('/create', 'store')->name('teacher.create');
        Route::get('/edit/{id}', 'edit')->name('teacher.edit');
        Route::post('/edit/{id}', 'update')->name('teacher.update');
        Route::delete('/delete/{id}', 'destroy')->name('teacher.destroy');
    });


// Country
Route::get('/country-list', [CountryController::class, 'list']);

// User
Route::get('/users', [UserController::class, 'index'])->name('user.index');

// Send Mail
Route::get('/send-welcome', [MailController::class, 'welcomeEmail']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
