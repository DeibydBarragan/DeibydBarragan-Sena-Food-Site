<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\MetodosController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

//CONSUMIDOR

//Ver pedidos del usuario
Route::get('/mispedidos',[PedidosController::class, 'pedidosUsuario'])->middleware('auth','consumidor') ->name('pedidosUsuario');

//Cancelar un pedido
Route::get('/cancelar/{id}',[PedidosController::class, 'cancelarPedido'])->middleware('auth','consumidor') ->name('cancelarPedido');

//Ver los metodos de pago
Route::get('/metodosdepago',[MetodosController::class, 'index'])->name('metodosPago');

Route::controller(CarritoController::class)->middleware('auth','consumidor')->group(function () {

    //Ver el carrito
    Route::get('/tucarrito', 'index') ->name('carrito.index');

    //Ver el codigo qr de un pedido
    Route::get('/codigoqr/{id}', 'show') ->name('codigoQr');

    //Añadir al carrito
    Route::get('/{id}', 'addToCart')->name('addToCart');

    //Modificar producto del carrito
    Route::get('/tucarrito/{id}', 'update')->name('cart.update');

    //Eliminar producto del carrito
    Route::get('/tucarrito/delete/{id}', 'destroy')->name('cart.destroy');

    //Pagar pedido
    Route::post('/tucarrito/pagar/{id}', 'pagar')->name('cart.pay');

});


