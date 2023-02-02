<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

Route::prefix("author")->name("author.")->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login','back.pages.auth.login')->name('login');
        Route::view('/forget-password','back.pages.auth.forget')->name('forget-password');
        Route::view('/password/reset/{token}',[authController::class,'ResetForm'])->name('Reset-form');
        
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('/home', [authController::class,'index'])->name('home');
        Route::post('/logout', [authController::class,'logout'])->name('logout');
    });
});