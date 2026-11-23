<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $fillable = [
        'equipo_id',
        'usuario_id',
        'fecha_prestamo',
        'fecha_devolucion',
        'estado',
    ];
    use HasFactory;
}
