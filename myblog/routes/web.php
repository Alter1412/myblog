<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

Route::get('/', [HomeController::class, 'getHome'])->name('home');


//Route::view('/','home');
Route::view('login','login')->name('login')->middleware('guest');
Route::view('dashboard','dashboard')->name('dashboard')->middleware('auth');


Route::get('user.register',[UserController::class,'register'])->name('register');
Route::post('home',[UserController::class,'getStore'])->name('store');


Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);


Route::get('category', [CategoryController::class,'getIndex'])->name('category.index');

Route::controller(CategoryController::class)->group(function(){

    Route::get('category/show/{id}', 'getShow')->name('category.show');

    Route::get('category/create', 'getCreate')->name('category.create');

    Route::post('category', 'getStore')->name('category.store');

    Route::get('category/edit/{id}', 'getEdit')->name('category.edit');

    Route::put('category/show/{id}', 'getUpdate')->name('category.update');

});



