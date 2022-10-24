<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    //MENU GENERAL
    public function index(){
        $productos = Producto::inRandomOrder()->get();
        $categorias = Categoria::all();

        return view('menu', ['productos' => $productos],['categorias' => $categorias]);
    }

    //MOSTRAR UN PRODUCTO
    public function show($id){

        $producto = Producto::findOrFail($id);
        $productosRelacionados = Producto::where('Disponibilidad',1)->where('id_categoria',$producto->id_categoria)->whereNotIn('id',[$producto->id])->inRandomOrder()->get();
        $categorias = Categoria::all();

        return view('producto', ['producto' => $producto, 'categorias' => $categorias], ['productos' => $productosRelacionados]);
    }

    //BUSCAR UN PRODUCTO
    public function search(Request $request){

        $nombre = trim($request->get('buscarProducto'));
        $productos = Producto::inRandomOrder()
                                ->where('Nombre','like','%'.$nombre.'%')
                                ->get();
        $categorias = Categoria::all();

        return view('menu', ['productos' => $productos],['categorias' => $categorias]);
    }

    //MOSTRAR PRODUCTOS POR CATEGORIA
    public function categoria($id_categoria){
        $categorias = Categoria::all();

        if($id_categoria == "mayorprecio"){
            $categoria = "Mayor precio";
            $productos = Producto::orderByDesc('Precio')->get();
        }
        elseif($id_categoria == "menorprecio"){
            $categoria = "Menor precio";
            $productos = Producto::orderBy('Precio')->get();
        }
        else{
        $productos = Producto::where('id_categoria', $id_categoria)->inRandomOrder()->get();
        $categoria = Categoria::findOrFail($id_categoria)->Categoria;
        }
        return view('menu',['productos' => $productos, 'categorias' => $categorias],['categoria' => $categoria]);
    }

    public function create(Request $request){

        $request->validate([
            'nombre' => 'required|min:3|max:30',
            'descripcion' => 'required|min:20|max:200',
            'precio' => 'required|max:5|min:2',
            'foto' => 'required|image',
        ]);

        $producto = new Producto;
        $producto->Nombre = $request->input('nombre');
        $producto->Descripcion = $request->input('descripcion');
        $producto->id_categoria = $request->input('categoria');
        $producto->Precio = $request->input('precio');
        $producto->Disponibilidad = $request->input('disponibilidad');
        $producto->Foto = $request->file('foto')->store('public/productos');
        $producto->save();

        session()->flash('productoCreado', 'El producto ha sido creado');

        return redirect()->back();
    }

    //ELIMINAR UN PRODUCTO
    public function destroy($id){

        $producto = Producto::find($id);
        Storage::delete($producto->Foto);
        Pedidos::where('id_producto',$id)->delete();
        $producto->delete();

        session()->flash('productoEliminado', 'El producto ha sido eliminado');

        return to_route('menu.index');
    }   

    //ACTUALIZAR PRODUCTO
    public function update(Request $request, $id){

        $request->validate([
            'nombre' => 'required|min:3|max:30',
            'descripcion' => 'required|min:20|max:200',
            'precio' => 'required|max:5|min:2',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->Nombre = $request->input('nombre');
        $producto->id_categoria = $request->input('categoria');
        $producto->Precio = $request->input('precio');
        $producto->Descripcion = $request->input('descripcion');
        $producto->Disponibilidad = $request->input('disponibilidad');
        if ($request->hasFile('foto')) {

            $request->validate([
                'foto' => 'required|image',
            ]);

            $producto->Foto = $request->file('foto')->store('public/productos');
        }

        $producto->save();

        session()->flash('productoEditado', 'Producto modificado satisfactoriamente');

        return redirect()->back();
    }
}
