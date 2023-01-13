<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    public function tipo()
    {
            return $this->hasOne('App\Models\Direccion');
    }
    public function comentarios()
    {
            return $this->hasMany('App\Models\comentario');
    }
}
