<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DepartmentController;

Route::resource('colleges', CollegeController::class);
Route::resource('departments', DepartmentController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
