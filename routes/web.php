<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//route resource
Route::resource('/', \App\Http\Controllers\PostController::class);


Route::get('/buku', [PostController::class, 'index'])->name('posts.index');

Route::get('/buku/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/buku', [PostController::class, 'store'])->name('posts.store');

Route::post('buku/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/buku/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/buku/update/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/buku/show/{id}', [PostController::class, 'show'])->name('posts.show');