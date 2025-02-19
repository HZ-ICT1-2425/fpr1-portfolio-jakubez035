<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\StaticContentController;
use \App\Http\Controllers\BlogController;

Route::get('/', [StaticContentController::class, 'index'])->name('index');

Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');

Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

Route::get('/blog', [StaticContentController::class, 'blog'])->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('show-blog');
