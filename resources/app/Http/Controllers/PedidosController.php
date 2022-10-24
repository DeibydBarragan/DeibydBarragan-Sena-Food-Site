<?php

namespace App\Http\Controllers;

use App\Mail\ProductoListo;
use App\Models\Estadopedido;
use App\Models\Historialpedidos;
use App\Models\Metodopago;
use App\Models\Preparacionpedido;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{   
    public function index(){

        $hoy = hoy();
        $estados = Estadopedido::whereNot('id', 5)->get();
        $preparaciones = Preparacionpedido::all();
            
            $pedidos = Historialpedidos::whereNot('id_estado',5)
                                        ->whereDate('Fecha',$hoy)
                                        ->orderBy('Fecha','DESC')
                                        ->paginate(15);
            foreach ($pedidos as $pedido) {

                $pedido ->Fecha = Carbon::parse($pedido -> Fecha ) -> toTimeString();
                
            }

        return view('vendedor.gestionarPedidosDia', ['pedidos' => $pedidos, 'estados' => $estados], ['preparaciones' => $preparaciones]);
    }

    public function indexEstado($id_estado) {
        
        $hoy = hoy();
        $estados = Estadopedido::whereNot('id', 5)->get();
        $preparaciones = Preparacionpedido::all();
            
            $pedidos = Historialpedidos::where('id_estado',$id_estado)
                                        ->whereDate('Fecha',$hoy)
                                        ->orderBy('Fecha','DESC')
                                        ->paginate(15);

            foreach ($pedidos as $pedido) {

                $pedido ->Fecha = Carbon::parse($pedido -> Fecha ) -> toTimeString();
                
            }
        return view('vendedor.gestionarPedidosDia', ['pedidos' => $pedidos, 'estados' => $estados], ['preparaciones' => $preparaciones]);
    }

    public function indexPreparacion($id_preparacion) {
        
        $hoy = hoy();
        $estados = Estadopedido::whereNot('id', 5)->get();
        $preparaciones = Preparacionpedido::all();
            
            $pedidos = Historialpedidos::where('id_preparacion',$id_preparacion)
                                        ->whereNot('id_estado',1)
                                        ->whereNot('id_estado',5)
                                        ->whereDate('Fecha',$hoy)
                                        ->orderBy('Fecha','DESC')
                                        ->paginate(15);
            
            foreach ($pedidos as $pedido) {

                $pedido ->Fecha = Carbon::parse($pedido -> Fecha ) -> toTimeString();
                
            }
        return view('vendedor.gestionarPedidosDia', ['pedidos' => $pedidos, 'estados' => $estados], ['preparaciones' => $preparaciones]);
    }

    public function historial(){
        $pedidos = Historialpedidos::whereNot('id_estado',5)
                                    ->orderBy('Fecha','DESC')
                                    ->paginate(15);
        $estados = Estadopedido::whereNot('id', 5)->get();
        $metodos = Metodopago::all();
                                
        return view('vendedor.gestionarPedidos', ['pedidos' => $pedidos, 'estados' => $estados],['metodos' => $metodos]);
    }       
    
    public function estado($id_estado){

        $pedidos = Historialpedidos::where('id_estado',$id_estado)->orderBy('Fecha','DESC')->paginate(15);
        $estados = Estadopedido::whereNot('id', 5)->get();
        $metodos = Metodopago::all();

        return view('vendedor.gestionarPedidos', ['pedidos' => $pedidos, 'estados' => $estados],['metodos' => $metodos]);
    }

    public function metodoPago($id_metodo){

        $pedidos = Historialpedidos::where('id_pago',$id_metodo)->orderBy('Fecha','DESC')->paginate(15);
        $estados = Estadopedido::whereNot('id', 5)->get();
        $metodos = Metodopago::all();

        return view('vendedor.gestionarPedidos', ['pedidos' => $pedidos, 'estados' => $estados],['metodos' => $metodos]);
    }

    public function search(Request $request){

        $hoy = hoy();
        $id = trim($request->get('buscarPedidoDia'));
        $pedidos = Historialpedidos::whereNot('id_estado',5)
                                        ->whereNot('id_estado',1)
                                        ->whereDate('Fecha',$hoy)
                                        ->where('id','like','%'.$id.'%')
                                        ->orderBy('Fecha','DESC')
                                        ->paginate(15);

        $estados = Estadopedido::whereNot('id', 5)->get();
        $preparaciones = Preparacionpedido::all();

        return view('vendedor.gestionarPedidosDia', ['pedidos' => $pedidos, 'estados' => $estados], ['preparaciones' => $preparaciones]);
    }
    
    public function searchHistorial(Request $request){

        $id = trim($request->get('buscarPedidoHistorial'));
        $pedidos = Historialpedidos::whereNot('id_estado',5)
                                        ->where('id', $id)
                                        ->orderBy('Fecha','DESC')
                                        ->paginate(15);

        $estados = Estadopedido::whereNot('id', 5)->get();
        $estados = Estadopedido::whereNot('id', 5)->get();
        $metodos = Metodopago::all();

        return view('vendedor.gestionarPedidos', ['pedidos' => $pedidos, 'estados' => $estados],['metodos' => $metodos]);
    }

    //CAMBIAR ESTADO Y PREPARACION DEL PEDIDO
    public function updatePreparacion(Request $request, $id) {
        $pedido = Historialpedidos::findOrFail($id);
        $pedido->id_estado = $request->input('estado');
        //$pedido->id_preparacion = $request->input('preparacion');

        if( $request->input('preparacion') != $pedido->id_preparacion ) {

            if ( $request->input('preparacion') == 2 ) {
                Mail::to($pedido->Usuario->Correo)->queue(new ProductoListo( $pedido ));
            }

        }

        if ($request->input('preparacion') != null) {
            $pedido->id_preparacion = $request->input('preparacion');
        }
        
        $pedido->save();

        session()->flash('pedidoEditado', 'Pedido modificado satisfactoriamente');
        return redirect()->back();
    }

    //PEDIDOS DEL USUARIO
    public function pedidosUsuario () {
        
        $id_usuario = Auth::user()->id;
        $pedidos = Historialpedidos::whereNot('id_estado',5)
                                    ->where('id_usuario', $id_usuario)
                                    ->orderBy('Fecha','DESC')
                                    ->paginate(15);

        return view('consumidor.pedidosUsuario', ['pedidos' => $pedidos]);
    }

    public function cancelarPedido ($id) {

        $pedido = Historialpedidos::findOrFail($id);

        if(Auth::user()->id != $pedido->id_usuario) {

            return to_route('menu.index');
        }

        else{
            
            $pedido->id_estado = 4;

            $pedido->save();
    
            return redirect()->back();
        }
        
    }

    public function pedidoCliente($id){
        
        $hoy = hoy();
        $estados = Estadopedido::whereNot('id', 5)->get();
        $pedido = Historialpedidos::find($id);

        return view('vendedor.detallePedido', ['pedido' => $pedido, 'estados' => $estados]);

    }
}
