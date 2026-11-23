<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $fillable = [
        'nombre',
        'codigo',
        'categoria',
        'estado',
    ];
    use HasFactory;
}
