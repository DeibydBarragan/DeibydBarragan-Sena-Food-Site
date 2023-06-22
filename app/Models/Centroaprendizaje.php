<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centroaprendizaje extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'centroaprendizaje';

    public function Usuarios() {
        return $this->hasMany(User::class, 'id');
    }
}
