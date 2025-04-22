<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$ediciones as $edicion) {
            \App\Models\Edicion::create([
                'id' => $edicion['id'],
                'curso_escolar' => $edicion['curso_escolar'],
                'fecha_celebracion' => $edicion['fecha_celebracion'],
                'fecha_apertura' => $edicion['fecha_apertura'],
                'fecha_cierre' => $edicion['fecha_cierre'],
            ]);
        }
    }

    private static $ediciones = array(
        array( 'curso_escolar' => '21/22', 'fecha_celebracion' => '2023-01-01', 'fecha_apertura' => '2023-12-31','fecha_cierre' => '2024-01-15','css_file' => 'no se que poner'),
        array( 'curso_escolar' => '23/24',  'fecha_celebracion' => '2023-01-01', 'fecha_apertura' => '2023-12-31','fecha_cierre' => '2024-01-15','css_file' => 'no se que poner'),
        array('curso_escolar' => '25/26',  'fecha_celebracion' => '2023-01-01', 'fecha_apertura' => '2023-12-31','fecha_cierre' => '2024-01-15','css_file' => 'no se que poner'),
        array('curso_escolar' => '26/27', 'fecha_celebracion' => '2023-01-01', 'fecha_apertura' => '2023-12-31','fecha_cierre' => '2024-01-15','css_file' => 'no se que poner'),
    );
}
