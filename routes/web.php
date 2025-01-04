<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Rota de teste inicial
Route::get('/', function () {
    return view('index');
});

// Rotas cursos
Route::get('/index-course', [CourseController::class, 'index'])->name('course.index');
Route::get('/show-course', [CourseController::class, 'show'])->name('course.show');
Route::post('/store-course', [CourseController::class, 'store'])->name('course.store');
Route::get('/edit-course', [CourseController::class, 'edit'])->name('course.edit');
Route::get('/create-course', [CourseController::class, 'create'])->name('course.create');
Route::put('/udpate-course', [CourseController::class, 'udpate']);
Route::delete('/destroy-course', [CourseController::class, 'destroy']);


// Rotas posts
Route::get('/index-post', [PostController::class, 'showPosts']);

