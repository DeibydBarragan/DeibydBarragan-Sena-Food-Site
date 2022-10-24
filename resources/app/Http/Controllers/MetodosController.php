<?php

namespace App\Http\Controllers;

use App\Models\Metodopago;
use Illuminate\Http\Request;

class MetodosController extends Controller
{
    public function index(){
        $metodos = Metodopago::all();
    return view('metodosPago',['metodos'=>$metodos]);
    }
}
