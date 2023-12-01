<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $libros = [
            [
                'ISBN' => '36487',
                'nombre' => 'El señor de los anillos',
                'descripcion' => 'Una épica historia de fantasía',
                'generoLiterario' => 'Fantasia',
                'precioUnitario' => 5000,
                'observacion' => 'Una obra maestra de la literatura',
                'foto' => 'img1.jpg',
                'area' => 50,
            ],
            [
                'ISBN' => '65219',
                'nombre' => 'La máquina del tiempo',
                'descripcion' => 'Un libro que trata de describir los viajes en el tiempo',
                'generoLiterario' => 'Ciencia ficción',
                'precioUnitario' => 5000,
                'observacion' => 'Una lectura obligada para los amantes de la ciencia ficción',
                'foto' => 'img2.jpg',
                'area' => 50,
            ],
            [
                'ISBN' => '72415',
                'nombre' => 'Cien años de soledad',
                'descripcion' => 'Un libro interesante que te hara desear leer lo que pasara en la siguiente pagina',
                'generoLiterario' => 'Novela',
                'precioUnitario' => 7000,
                'observacion' => 'Una lectura imprescindible para cualquier amante de la literatura',
                'foto' => 'img3.jpg',
                'area' => 50,
            ],
            [
                'ISBN' => '85354',
                'nombre' => 'La Divina Comedia',
                'descripcion' => 'Una obra maestra de la literatura universal',
                'generoLiterario' => 'Poema épico',
                'precioUnitario' => 8500,
                'observacion' => 'Una lectura que te transportará al infierno, el purgatorio y el cielo',
                'foto' => 'img4.jpg',
                'area' => 50,
            ],
            [
                'ISBN' => '98445',
                'nombre' => 'El Quijote de la Mancha',
                'descripcion' => 'Una obra maestra de la literatura española',
                'generoLiterario' => 'Novela',
                'precioUnitario' => 10500,
                'observacion' => 'Una lectura divertida y reflexiva sobre la vida',
                'foto' => 'img5.jpg',
                'area' => 50,
            ],
        ];
         DB::table('libro')->insert($libros);
    }
}
