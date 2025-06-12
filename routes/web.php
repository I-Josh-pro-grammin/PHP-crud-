<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', 'App\Http\Controllers\StudentController');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
