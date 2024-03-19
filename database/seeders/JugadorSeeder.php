<?php

namespace Database\Seeders;

use App\Models\Jugador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jugador::create([
            'nombre'    => 'Juan Perez',
            'correo'    => 'juanperez@gmail.com',
            'direccion' => 'calle falsa 123',
            'telefono'  => '78458975'
        ]);

        Jugador::create([
            'nombre'    => 'Luis González',
            'correo'    => 'luis.gonzalez@example.com',
            'direccion' => 'Av. Principal 456',
            'telefono'  => '987654321'
        ]);
        
        Jugador::create([
            'nombre'    => 'María Rodríguez',
            'correo'    => 'maria.rodriguez@example.com',
            'direccion' => 'Calle Secundaria 789',
            'telefono'  => '123456789'
        ]);
        
        Jugador::create([
            'nombre'    => 'Carlos Sánchez',
            'correo'    => 'carlos.sanchez@example.com',
            'direccion' => 'Plaza Mayor 101',
            'telefono'  => '456789123'
        ]);
        Jugador::create([
            'nombre'    => 'Laura Martínez',
            'correo'    => 'laura.martinez@example.com',
            'direccion' => 'Avenida Central 1020',
            'telefono'  => '654987321'
        ]);
        
        Jugador::create([
            'nombre'    => 'Pedro López',
            'correo'    => 'pedro.lopez@example.com',
            'direccion' => 'Calle Nueva 304',
            'telefono'  => '789456123'
        ]);
        
        Jugador::create([
            'nombre'    => 'Ana García',
            'correo'    => 'ana.garcia@example.com',
            'direccion' => 'Paseo del Sol 508',
            'telefono'  => '321654987'
        ]);
        
        Jugador::create([
            'nombre'    => 'Sofía Hernández',
            'correo'    => 'sofia.hernandez@example.com',
            'direccion' => 'Camino Real 789',
            'telefono'  => '987321654'
        ]);
        
        Jugador::create([
            'nombre'    => 'David Pérez',
            'correo'    => 'david.perez@example.com',
            'direccion' => 'Avenida de la Paz 912',
            'telefono'  => '741852963'
        ]);
        
        Jugador::create([
            'nombre'    => 'Elena Ramírez',
            'correo'    => 'elena.ramirez@example.com',
            'direccion' => 'Calle Principal 1520',
            'telefono'  => '369258147'
        ]);
        
        Jugador::create([
            'nombre'    => 'Miguel Torres',
            'correo'    => 'miguel.torres@example.com',
            'direccion' => 'Plaza de la Libertad 123',
            'telefono'  => '852963741'
        ]);
        
        Jugador::create([
            'nombre'    => 'Paula Díaz',
            'correo'    => 'paula.diaz@example.com',
            'direccion' => 'Paseo del Prado 304',
            'telefono'  => '159264837'
        ]);
        
        Jugador::create([
            'nombre'    => 'Javier Ruiz',
            'correo'    => 'javier.ruiz@example.com',
            'direccion' => 'Avenida Juárez 708',
            'telefono'  => '258147369'
        ]);
        
        Jugador::create([
            'nombre'    => 'Carmen Gómez',
            'correo'    => 'carmen.gomez@example.com',
            'direccion' => 'Calle del Río 901',
            'telefono'  => '147369258'
        ]);

        Jugador::create([
            'nombre'    => 'Gabriela Silva',
            'correo'    => 'gabriela.silva@example.com',
            'direccion' => 'Calle Principal 567',
            'telefono'  => '987654321'
        ]);
        
        Jugador::create([
            'nombre'    => 'Fernando Ortiz',
            'correo'    => 'fernando.ortiz@example.com',
            'direccion' => 'Avenida Central 890',
            'telefono'  => '123456789'
        ]);
        
        Jugador::create([
            'nombre'    => 'Patricia Nuñez',
            'correo'    => 'patricia.nunez@example.com',
            'direccion' => 'Plaza Mayor 111',
            'telefono'  => '456789123'
        ]);
        
        Jugador::create([
            'nombre'    => 'Ricardo Vargas',
            'correo'    => 'ricardo.vargas@example.com',
            'direccion' => 'Avenida del Sol 222',
            'telefono'  => '789123456'
        ]);
        
        Jugador::create([
            'nombre'    => 'Isabel Flores',
            'correo'    => 'isabel.flores@example.com',
            'direccion' => 'Calle Nueva 333',
            'telefono'  => '321654987'
        ]);
        
        Jugador::create([
            'nombre'    => 'Alejandro Medina',
            'correo'    => 'alejandro.medina@example.com',
            'direccion' => 'Paseo del Río 444',
            'telefono'  => '654987321'
        ]);
        
        Jugador::create([
            'nombre'    => 'Sara Ramos',
            'correo'    => 'sara.ramos@example.com',
            'direccion' => 'Avenida Juárez 555',
            'telefono'  => '987321654'
        ]);
        
        Jugador::create([
            'nombre'    => 'Jorge Morales',
            'correo'    => 'jorge.morales@example.com',
            'direccion' => 'Camino Real 666',
            'telefono'  => '741852963'
        ]);
        
        Jugador::create([
            'nombre'    => 'Eva Pérez',
            'correo'    => 'eva.perez@example.com',
            'direccion' => 'Calle de la Paz 777',
            'telefono'  => '369258147'
        ]);
        
        Jugador::create([
            'nombre'    => 'Daniel Gómez',
            'correo'    => 'daniel.gomez@example.com',
            'direccion' => 'Paseo del Prado 888',
            'telefono'  => '852963741'
        ]);
                
    }
}
