<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;



// To welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('home');


Route::get('/products', [BlogController::class, 'index'])->name('products');

// To create blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('create');

// To single blog post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('show');

// To store blog post to the DB
Route::post('/blog', [BlogController::class, 'store'])->name('store');

// To edit single blog post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('edit');

// To update single blog post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('update');

// To delete single blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('destroy');




Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
