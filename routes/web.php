<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::prefix('frontend')->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
});


Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/services/{id}', function ($id) {
    return 'Service =' . $id;
})->name('services');


Route::fallback(function () {
    return view('error404');
});

Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/about', [FrontController::class, 'about'])->name('abouts');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{id}/delete', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::resource('users', UserController::class);
Route::get('/users/{user}/manage', [UserController::class, 'manage'])->name('users.manage');


require __DIR__ . '/auth.php';
