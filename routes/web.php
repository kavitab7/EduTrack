<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    $totalStudents = Student::count();
    $studentsPerClass = Student::select('class', DB::raw('count(*) as total'))
        ->groupBy('class')
        ->pluck('total', 'class')
        ->toArray();

    return view('dashboard', compact('totalStudents', 'studentsPerClass'));
});

Route::resource('students', StudentController::class);
