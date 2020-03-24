<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiante')->insert([
            'nombre' => 'Juan',
            'apellido_paterno' => 'Perez',
            'apellido_materno' => 'Molina',
            'rude' => '110321321',
            'fnac' => '2008-10-08',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'Maria',
            'apellido_paterno' => 'Quispe',
            'apellido_materno' => 'Medrano',
            'rude' => '110321321',
            'fnac' => '2008-10-08',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'Marta',
            'apellido_paterno' => 'Rodriguez',
            'apellido_materno' => 'Arauz',
            'rude' => '110321321',
            'fnac' => '2008-10-08',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'Gregorio',
            'apellido_paterno' => 'Lopez',
            'apellido_materno' => 'Camacho',
            'rude' => '110321321',
            'fnac' => '2008-10-08',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'Marcos',
            'apellido_paterno' => 'Silva',
            'apellido_materno' => 'Pedraza',
            'rude' => '110321321',
            'fnac' => '2008-10-08',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        // ----------- TRIMESTRE -------------

        DB::table('trimestre')->insert([
            'nombre' => 'Primer Trimestre',
            'inicio' => '2020-01-01',
            'fin' => '2020-03-31',
        ]);
        DB::table('trimestre')->insert([
            'nombre' => 'Segundo Trimestre',
            'inicio' => '2020-04-01',
            'fin' => '2020-08-31',
        ]);
        DB::table('trimestre')->insert([
            'nombre' => 'Tercer Trimestre',
            'inicio' => '2020-09-01',
            'fin' => '2020-12-31',
        ]);
    }
}
