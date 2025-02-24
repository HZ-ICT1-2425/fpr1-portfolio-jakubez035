<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\StaticContentController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\CourseController;

Route::get('/', [StaticContentController::class, 'index'])->name('index');

Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');

Route::get('/dashboard', [CourseController::class, 'dashboard'])->name('dashboard');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('/blog/{uri}', [BlogController::class, 'show'])->name('show-blog');
