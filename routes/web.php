<?php

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DepartmentController;

Route::resource('colleges', CollegeController::class);
Route::resource('departments', DepartmentController::class);

Route::get('/', function () {
    return view('welcome');
})->name('home');
