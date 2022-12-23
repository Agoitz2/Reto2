<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autenticacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = "autenticaciones";

    protected $fillable = [
        'usuario',
        'nombre',
        'apellido',
        'email',
        'contrasena'
     ];
}
