<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juego;
use Carbon\Carbon;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nombres_juego = ['Blackjack', 'Ruleta', 'Póker', 'Tragamonedas', 'Baccarat', 'Dados', 'Sic Bo', 'Bingo', 'Keno', 'Craps'];
        $nombres_periodo = ['diario', 'semanal', 'mensual'];
        // Creamos diez juegos con datos ficticios
        for ($i = 0; $i < 10; $i++) {
            Juego::create([
                'nombre' => $nombres_juego[$i],
                'monto_base' => rand(1000, 10000),
                'cantidad_jugador' => 10,
                'periodo' => $nombres_periodo[$i%3], // Puedes ajustar esto según tus necesidades
                'fecha_inicio' => Carbon::now()->addDays(rand(1, 30)), // Fecha aleatoria dentro de los próximos 30 días
            ]);
        }
    }
}
