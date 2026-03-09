<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/midterm', function () {
    return "Welcome to Laravel Midterm Exam";
});

Route::get('/student', function () {
    return view('student');
});