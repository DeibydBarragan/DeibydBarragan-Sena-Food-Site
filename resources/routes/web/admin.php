<?php

use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

//ADMIN


Route::controller(UsuariosController::class)->prefix('admin')->middleware('auth','admin')->group(function () {
    
    Route::get('generateStorageLink', function (){
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        echo 'ok';
    });
    //Ver usuarios
    Route::get('usuarios', 'index') ->name('gestionarUsuarios.index');

    //Ver usuarios por rol
    Route::get('usuarios/rol/{rol}' , 'rol') ->name('gestionarUsuarios.rol');

        //Ver usuarios por centro
    Route::get('usuarios/centro/{rol}', 'centro') ->name('gestionarUsuarios.centro');

        //Buscar un usuario
    Route::get('usuarios/buscar/', 'search')->name('gestionarUsuarios.search');

        //Crear un usuario
    Route::post('usuarios', 'create')->name('gestionarUsuarios.create');

        //Eliminar un usuario
    Route::delete('usuarios/{id}', 'destroy')->name('gestionarUsuarios.destroy');

        //Modificar un usuario
    Route::post('usuarios/update/{id}', 'update')->name('gestionarUsuarios.update');

});

Route::controller(SoporteController::class)->prefix('admin')->middleware('auth','admin')->group(function () {

    //Ver comentarios
    Route::get('soporte', 'index') ->name('soporteAdmin.index');
    
    //Ver comentarios por estado
    Route::get('soporte/estado/{id}', 'estado') ->name('soporteAdmin.estado');
    
    //Buscar un comentario
    Route::get('soporte/}', 'search')->name('soporte.search');
    
    //ELiminar un comentario
    Route::delete('soporte/{id}', 'destroy') ->name('soporteAdmin.destroy');
    
    //Actualizar un comentario
    Route::post('soporte/{id}', 'update') ->name('soporteAdmin.update');

});