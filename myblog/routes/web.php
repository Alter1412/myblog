<?php

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



