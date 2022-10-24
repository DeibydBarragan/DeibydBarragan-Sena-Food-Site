<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

//Login y Registro
//Registro

Route::controller(RegistroController::class)->prefix('registro')->middleware('guest')->group(function () {

    Route::get('/','show')->name('registro.index');

    Route::post('/', 'registro')->name('registro.create');

});


//Login

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'show')->name('login')->middleware('guest');

    Route::post('/login', 'validateLogin')->name('validar');
    
    Route::post('/logout', 'logout')->name('logout');

});

