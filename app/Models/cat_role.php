<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_role extends Model
{
    use HasFactory,Notifiable;
    
    protected $fillable = [
        'rol_name',
        'estatus', 
    ];
}
