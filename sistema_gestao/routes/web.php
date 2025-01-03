<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Rota de teste inicial
Route::get('/', function () {
    return "Teste de rota inicial";
});

// Rota para exibir a lista de cursos
Route::get('/index-course', [CourseController::class, 'index'])->name('courses.index');
Route::get('/index-post', [CourseController::class, 'index'])->name('post.index');
