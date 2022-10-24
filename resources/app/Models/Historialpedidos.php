<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historialpedidos extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    protected $table = 'historialpedidos';

    public function Estadopedido() {
        return $this->belongsTo(Estadopedido::class,'id_estado');
    }

    public function Usuario() {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function Metodopago() {
        return $this->belongsTo(Metodopago::class,'id_pago');
    }

    public function Preparacion() {
        return $this->belongsTo(Preparacionpedido::class,'id_preparacion');
    }

    public function PedidosProductos() {
        return $this->hasMany(Pedidos::class,'id_pedido');
    }
}
