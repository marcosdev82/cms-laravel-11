<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Rota de teste inicial
Route::get('/', function () {
    return view('index');
});

// Rotas cursos
Route::get('/index-course', [CourseController::class, 'index']);
Route::get('/show-course', [CourseController::class, 'show']);
Route::get('/create-course', [CourseController::class, 'create']);
Route::get('/store-course', [CourseController::class, 'store']);
Route::get('/edit-course', [CourseController::class, 'edit']);
Route::get('/udpate-course', [CourseController::class, 'udpate']);
Route::get('/destroy-course', [CourseController::class, 'destroy']);


// Rotas posts
Route::get('/index-post', [PostController::class, 'showPosts']);

