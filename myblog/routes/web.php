<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'getHome'])->name('home');

/*
mas adelante
Route::get('login', function () {
    return view('login');
});
Route::get('logout', function () {
    return view('logout');
}); */

Route::get('category', [CategoryController::class,'getIndex'])->name('category.index');

Route::controller(CategoryController::class)->group(function(){

    Route::get('category/show/{id}', 'getShow')->name('category.show');

    Route::get('category/create', 'getCreate')->name('category.create');

    Route::post('category', 'getStore')->name('category.store');

    Route::get('category/edit/{id}', 'getEdit')->name('category.edit');

    Route::put('category/show/{id}', 'getUpdate')->name('category.update');


});
/* 
Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
