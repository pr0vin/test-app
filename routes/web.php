<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('frontend')->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
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
