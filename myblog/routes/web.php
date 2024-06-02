<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'getHome']);

/*
mas adelante
Route::get('login', function () {
    return view('login');
});
Route::get('logout', function () {
    return view('logout');
}); */

Route::get('category', [CategoryController::class,'getIndex']);

Route::controller(CategoryController::class)->group(function(){

    Route::get('category/show/{id}', 'getShow');

    Route::get('category/create', 'getCreate');

    Route::post('category', 'getStore');

    Route::get('category/edit/{id}', 'getEdit');

    Route::put('category/show/{id}', 'getUpdate');

});



