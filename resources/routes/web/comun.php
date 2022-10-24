<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

//USUARIO CUALQUIERA

    //Perfil
Route::get('/perfil', [UsuariosController::class, 'show'])->middleware('auth')->name('perfil');

Route::controller(ProductosController::class)->group(function () {

    //Buscar producto
    Route::get('/buscar', 'search')->name('menu.search');

    //Filtrar por categoria
    Route::get('/categoria/{id}', 'categoria') ->name('menu.categoria');

    //Ver detalle de producto
    Route::get('/productos/{id}', 'show')->name('productos.show');

    Route::get('/', 'index') ->name('menu.index');
});

Route::controller(ProductosController::class)->middleware('auth')->group(function () {


    //Crear producto
    Route::post('/', 'create')->name('menu.create');

    //Modificar producto
    Route::post('/productos/{id}', 'update')->name('menu.update');

    //Eliminar producto
    Route::delete('/productos/{id}', 'destroy')->name('menu.destroy');
    

});
    //Mostrar menú


    //Vista para enviar comentario
Route::view('/soporte', 'soporte')->middleware('auth')->name('soporte.show');

    //Crear comentario
Route::post('/soporte', [SoporteController::class, 'create'])->middleware('auth')->name('soporte.create');

Route::controller(UsuariosController::class)->middleware('auth')->group(function () {

    //Modificarse
    Route::post('updateself/{id}', 'modificarse')->name('modificarse');
    //Eliminar foto
    Route::get('deletephoto/{id}', 'eliminarFoto')->name('eliminarFoto');
    //Eliminarse
    Route::delete('deleteself/{id}', 'eliminarse')->name('eliminarse');

});