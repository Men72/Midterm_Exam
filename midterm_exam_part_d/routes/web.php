<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\Student;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('student_form');
});

Route::post('/student', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'age' => 'required|integer|min:1|max:120',
    ]);

    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
    ]);

    return redirect('/student')->with('success', 'Student created successfully!');
});

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [LoginController::class, 'dashboard']);
