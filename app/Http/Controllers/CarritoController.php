<?php

namespace App\Http\Controllers;

use App\Mail\Factura;
use App\Models\Historialpedidos;
use App\Models\Metodopago;
use App\Models\Pedidos;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;
use Symfony\Component\Console\Input\Input;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CarritoController extends Controller
{
    public $productosPedido;

    public function index(){

        $metodosPago = Metodopago::all();
        $id_usuario = Auth::user()->id;
        $pedido = Historialpedidos::where('id_usuario',$id_usuario)
                                    ->where('id_estado', 5)->first();


        if( $pedido == null ){
            $pedido = false;
            return view('consumidor.carrito',['pedido' => $pedido]);
        }

        else {

            $productosPedido = Pedidos::where('id_pedido', $pedido->id)->get();
            if ( empty($productosPedido->count()) ) {
                $pedido = false;
                return view('consumidor.carrito',['pedido' => $pedido]);
            }

            else {
                $pedido->Precio = 0;
                
                foreach ($productosPedido as $producto) {
                    $pedido->Precio = $pedido->Precio + (($producto->Productos->Precio) * $producto->Cantidad);
                }
                
                $pedido->save();
                
                $pedido->CantidadProductos = 0;
                
                foreach ($productosPedido as $producto) {
    
                    $producto->Subtotal = ($producto->Productos->Precio) * $producto->Cantidad;
                    $pedido->CantidadProductos = $pedido->CantidadProductos + $producto->Cantidad;
                }


                return view('consumidor.carrito',['pedido' => $pedido, 'productosPedido' => $productosPedido],['metodos' => $metodosPago]);
            }
        }     
    }

    public function show($id){

        $pedido = Historialpedidos::findOrFail($id);
        
        if(Auth::user()->id === $pedido->id_usuario) {

            return view('consumidor.codigo',['pedido' => $pedido]);
        }

        else {
            return to_route('menu.index');
        }

    }

    public function addToCart($id){

        $id_usuario =  Auth::user()->id;
        $pedido = Historialpedidos::where('id_usuario', $id_usuario)
                                    ->where('id_estado', 5)
                                    ->first();
        if( $pedido == null ) {

            $pedido = New Historialpedidos;
            $pedido->id_usuario = $id_usuario;

            $pedido->save();
        }
        $pedido = Historialpedidos::where('id_usuario', $id_usuario)
                                    ->where('id_estado', 5)
                                    ->first();
                                    
        $pedidoProducto = Pedidos::where('id_producto', $id)
                                    ->where('id_pedido', $pedido->id)
                                    ->first();
        if ( $pedidoProducto == null ) {
            $pedidoProducto = New Pedidos;
            $pedidoProducto->id_pedido = $pedido->id;
            $pedidoProducto->id_producto = $id;
            
            if ( isset($_GET['cantidadProducto']) ) {

                if  ( ($_GET['cantidadProducto'] != null) and ($_GET['cantidadProducto'] > 0) and ($_GET['cantidadProducto'] <= 10)) {
                    $pedidoProducto->Cantidad = $_GET['cantidadProducto'];
                }

                else {
                    $pedidoProducto->Cantidad = 1;
                }
            }
        
            else {
                $pedidoProducto->Cantidad = 1;
            }

            $pedidoProducto->save();
        }

        elseif ( isset($_GET['cantidadProducto']) ) {

            if  ( ($_GET['cantidadProducto'] != null) and ($_GET['cantidadProducto'] > 0) and ($_GET['cantidadProducto'] <= 10)) {
                $cantidadProducto = $_GET['cantidadProducto'];
            }

            else {
                $cantidadProducto = 1;
            }
            
            if ($pedidoProducto->Cantidad >= 10) {
                session()->flash('productoCarrito', 'Ya tienes 10 productos de esta referencia en tu carrito');
            }

            else {

                if ( ($pedidoProducto->Cantidad + $cantidadProducto) >= 10 ) {
                    $pedidoProducto->Cantidad = 10;
                }

                else {
                    $pedidoProducto->Cantidad = $pedidoProducto->Cantidad + $cantidadProducto; 
                }
                
            }
        }

        else{
            if ($pedidoProducto->Cantidad >= 10) {
                session()->flash('productoCarrito', 'Ya tienes 10 productos de esta referencia en tu carrito');
            }
            else{
                
                $pedidoProducto->Cantidad = $pedidoProducto->Cantidad + 1;
            }
        }

        $pedidoProducto->save();


        session()->flash('productoCarrito', 'Producto añadido a tu carrito');

        return redirect()->back();
    }

    public function update($id){

        $id_usuario =  Auth::user()->id;

        $pedido = Historialpedidos::where('id_usuario', $id_usuario)
                                    ->where('id_estado', 5)
                                    ->first();
                                    
        $pedidoProducto = Pedidos::where('id_producto', $id)
                                    ->where('id_pedido', $pedido->id)
                                    ->first();

        $pedidoProducto->Cantidad = $_GET['cantidadProducto'];    

        if ($pedidoProducto->Cantidad > 10) {
            return to_route('carrito.index');
        }
        if( $pedidoProducto->Cantidad < 1) {
             return to_route('carrito.index');
        }

        else {
            $pedidoProducto->save();
        }
        
        return redirect()->back();
    }

    public function destroy($id){
        $id_usuario =  Auth::user()->id;

        $pedido = Historialpedidos::where('id_usuario', $id_usuario)
                                    ->where('id_estado', 5)
                                    ->first();
                                    
        Pedidos::where('id_producto', $id)
                    ->where('id_pedido', $pedido->id)
                    ->delete();

        return redirect()->back();
    }

    public function pagar(Request $request, $id) {

        $pedido = Historialpedidos::findOrFail($id);

        $productosPedido = Pedidos::where('id_pedido', $pedido->id)->get();

        $pedido->Precio = 0;
                
        foreach ($productosPedido as $producto) {
        $pedido->Precio = $pedido->Precio + (($producto->Productos->Precio) * $producto->Cantidad);
        }
                
        $pedido->id_pago = $request->input('metodosPago');

        if ($pedido->id_pago == 1 ) {

            $pedido->id_estado = 1;
        }

        else {

            $pedido->id_estado = 2;
        }
        $ruta = 'https://senafoodsite.online/pedidos/pedido/'.$id;
        QrCode::size(270)->generate($ruta, '../public/storage/qrcodes/'.md5($pedido->id_usuario.'-'.$pedido->id).'.svg');

        $pedido->save();
                
        $pedido->CantidadProductos = 0;
                
        foreach ($productosPedido as $producto) {
    
            $producto->Subtotal = ($producto->Productos->Precio) * $producto->Cantidad;
            $pedido->CantidadProductos = $pedido->CantidadProductos + $producto->Cantidad;
        }

        if ($pedido->id_pago != 1) {
            Mail::to($pedido->Usuario->Correo)->queue(new Factura( $pedido, $productosPedido ));
        }

        return to_route('codigoQr',$id);
    }
}
