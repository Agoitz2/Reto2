<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    use HasFactory;
    public function categoria()
    {
        return $this->hasMany('App\Models\categoriaEvento');
    }
    public function usuario_id()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
    
    
    
}
