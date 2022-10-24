<?php

use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

//VENDEDORES

Route::controller(PedidosController::class)->prefix('pedidos')->middleware('auth','vendedor')->group(function() {
    
    //Ver pedidos del dia
    Route::get('dia', 'index') ->name('gestionarPedidos.index');

    //Filtrar pedidos del dia por estado
    Route::get('/dia/estado/{id}', 'indexEstado') ->name('gestionarPedidosDia.estado');
    
    //Filtrar pedidos del dia por preparacion
    Route::get('/dia/preparacion/{id}', 'indexPreparacion') ->name('gestionarPedidosDia.preparacion');
    
    //Buscar un pedido del dia
    Route::get('dia/buscar/', 'search') ->name('gestionarPedidosDia.search');
    
    //Actualizar pedido del dia
    Route::post('/dia/update/{id}', 'updatePreparacion') ->name('gestionarPedidos.update');
    
    //HISTORIAL DE PEDIDOS
    //Ver el historial de pedidos
    Route::get('/historial', 'historial') ->name('gestionarPedidos.historial');
    
    //Filtrar pedidos por estado en el historial
    Route::get('historial/estado/{id}', 'estado') ->name('gestionarPedidos.estado');
    
    //Filtrar pedidos por metodo de pago en el historial
    Route::get('historial/metodo/{id}', 'metodoPago') ->name('gestionarPedidos.metodo');
    
    //Buscar un peidido
    Route::get('historial/buscar/', 'searchHistorial') ->name('gestionarPedidos.search');

    //Pedido codigo QR
    Route::get('pedido/{id}', 'pedidoCliente') ->name('detallePedido');

});