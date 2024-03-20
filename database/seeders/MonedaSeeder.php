<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Moneda;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $monedas = [
            [
                'nombre' => 'Dólar estadounidense',
                'codigo' => 'USD',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Euro',
                'codigo' => 'EUR',
                'simbolo' => '€'
            ],
            [
                'nombre' => 'Boliviano',
                'codigo' => 'BOB',
                'simbolo' => 'Bs'
            ],
            [
                'nombre' => 'Sol peruano',
                'codigo' => 'PEN',
                'simbolo' => 'S/'
            ],
            [
                'nombre' => 'Peso argentino',
                'codigo' => 'ARS',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Peso chileno',
                'codigo' => 'CLP',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Peso colombiano',
                'codigo' => 'COP',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Peso cubano',
                'codigo' => 'CUP',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Quetzal guatemalteco',
                'codigo' => 'GTQ',
                'simbolo' => 'Q'
            ],
            [
                'nombre' => 'Lempira hondureño',
                'codigo' => 'HNL',
                'simbolo' => 'L'
            ],
            [
                'nombre' => 'Peso mexicano',
                'codigo' => 'MXN',
                'simbolo' => '$'
            ],
            [
                'nombre' => 'Libra esterlina',
                'codigo' => 'GBP',
                'simbolo' => '£'
            ],
            [
                'nombre' => 'Franco suizo',
                'codigo' => 'CHF',
                'simbolo' => 'CHF'
            ],
            [
                'nombre' => 'Yuan chino',
                'codigo' => 'CNY',
                'simbolo' => '¥'
            ],
            [
                'nombre' => 'Yen japonés',
                'codigo' => 'JPY',
                'simbolo' => '¥'
            ],
            [
                'nombre' => 'Won surcoreano',
                'codigo' => 'KRW',
                'simbolo' => '₩'
            ],
        ];

        foreach ($monedas as $moneda) {
            Moneda::create($moneda);
        }
    }
}
