<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Command\HistoryCommand;

class Preparacionpedido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'preparacionpedido';

    public function Pedidos() {
        return $this->hasMany(Historialpedidos::class,'id');
    }
}
