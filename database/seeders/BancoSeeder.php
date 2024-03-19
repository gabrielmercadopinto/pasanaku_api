<?php

namespace Database\Seeders;

use App\Models\Banco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bancos = [
            'Banco Mercantil Santa Cruz',
            'Banco Nacional de Bolivia',
            'Banco de Crédito de Bolivia',
            'Banco Ganadero',
            'Banco Unión',
        ];

        foreach ($bancos as $nombre) {
            Banco::create(['nombre' => $nombre]);
        }
    }
}
