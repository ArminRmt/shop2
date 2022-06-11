<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Models\Category;






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


// Category resource controller
Route::resource('/categories', CategoryController::class);

// The resource controller above under the hood.

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// To contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// To Send data to email.
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
