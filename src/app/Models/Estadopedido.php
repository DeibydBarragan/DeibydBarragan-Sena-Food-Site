<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadopedido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "estadopedido";

    public function Pedidos() {
        return $this->hasMany(Historialpedidos::class, 'id');
    }
}
