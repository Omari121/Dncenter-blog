<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::prefix("author")->name("author")->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login','back.pages.author.login')->name('login');
        Route::view('/forget-password','back.pages.author.forget')->name('forget-password');
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('/home', [authController::class,'index'])->name('home');
    });
});