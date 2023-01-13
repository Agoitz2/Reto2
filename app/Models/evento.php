<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->hasOne('App\Models\categoriaEvento');
    }
    public function comentarios()
    {
            return $this->hasMany('App\Models\comentario');
    }
}
