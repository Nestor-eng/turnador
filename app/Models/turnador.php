<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turnador extends Model
{
    use HasFactory;
    
      protected $fillable = [
        'folio',
        'descripcion',
        'estatus', 
    ];
}
