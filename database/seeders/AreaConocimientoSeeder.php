<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AreaConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idArea' => '10',
                'descripcion' => 'Ciencias Naturales'
            ],
            [
                'idArea' => '20',
                'descripcion' => 'Ciencias Humanas, Sociales y Juridicas'
            ],
            [
                'idArea' => '30',
                'descripcion' => 'Artes'
            ],
            [
                'idArea' => '40',
                'descripcion' => 'Ciencias de la Salud'
            ],
            [
                'idArea' => '50',
                'descripcion' => 'Liteartura'
            ],
            [
                'idArea' => '60',
                'descripcion' => 'Gastronomia y Cocina'
            ]
        ];
        DB::table('AreaConocimiento')->insert($datos);
    }
}
