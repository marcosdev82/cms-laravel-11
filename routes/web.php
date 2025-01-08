<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TermController;
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
Route::get('/index-post', [PostController::class, 'showPosts'])->name('post.index');
Route::get('/show-post', [PostController::class, 'show'])->name('post.show');
Route::post('/store-post', [PostController::class, 'store'])->name('post.store');
Route::get('/edit-post', [PostController::class, 'edit'])->name('post.edit');
Route::get('/create-post', [PostController::class, 'create'])->name('post.create');
Route::put('/udpate-post', [PostController::class, 'udpate']);
Route::delete('/destroy-post', [PostController::class, 'destroy']);

// Rotas terms
Route::get('/index-term', [TermController::class, 'showTerms'])->name('term.index');
Route::get('/show-term', [TermController::class, 'show'])->name('term.show');
Route::post('/store-term', [TermController::class, 'store'])->name('term.store');
Route::get('/edit-term', [TermController::class, 'edit'])->name('term.edit');
Route::get('/create-term', [TermController::class, 'create'])->name('term.create');
Route::put('/udpate-term', [TermController::class, 'udpate'])->name('term.update');
Route::delete('/destroy-term', [TermController::class, 'destroy']);


// Registro de taxonomia
Route::get('/register-taxonomy', function () {
    return registerTaxonomy('pessoas', 'post', [
        'label' => 'Pessoas',
        'slug' => 'pessoa',
        'capabilities' => [
            'assign_terms' => 'edit_guides',
            'edit_terms' => 'publish_guides',
        ],
    ]);
});


