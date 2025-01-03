<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Rota de teste inicial
Route::get('/', function () {
    return view('index');
});

// // Rota para exibir a lista de cursos
Route::get('/index-course', [CourseController::class, 'index'])->name('courses.index');

// Rota para exibir a lista de posts (ajustada para um método diferente)
Route::get('/index-post', [PostController::class, 'showPosts'])->name('post.index');
