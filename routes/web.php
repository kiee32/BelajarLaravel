<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\DashboardController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('/admin/student', [StudentsController::class, 'index']);
