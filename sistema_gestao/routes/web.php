<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "teste";
});

Route::get('/index-course', [CourseController::class, 'index']);
