<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ClassroomController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::resource('/admin/students', StudentsController::class);

Route::resource('/admin/classrooms', ClassroomController::class);

Route::resource('/admin/subjects', SubjectController::class);

Route::resource('/admin/teachers', TeacherController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);
