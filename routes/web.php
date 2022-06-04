<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [BlogController::class, 'index'])->name('products');

Route::get('/blog/create', [BlogController::class, 'create'])->name('create');

// To store blog post to the DB
Route::post('/blog', [BlogController::class, 'store'])->name('store');


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
