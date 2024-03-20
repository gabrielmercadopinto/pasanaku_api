<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $table = 'juegos';

    protected $fillable = [
        'nombre',
        'monto_base',
        'cantidad_jugador',
        'periodo',
        'fecha_inicio',
    ];
}
