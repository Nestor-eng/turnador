<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnadorEspecial extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'telefono',
        'usuario',
        'folio',
        'asunto',
        'descripcion',
        'estatus'
    ];
}
