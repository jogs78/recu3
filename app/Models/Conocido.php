<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocido extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function carros(){
        return $this->hasMany(Carro::class);
    }
}
