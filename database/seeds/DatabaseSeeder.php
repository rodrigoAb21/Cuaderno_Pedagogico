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
            'fnac' => '1585627200',
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
            'fnac' => '1585627200',
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
            'fnac' => '1585627200',
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
            'fnac' => '1585627200',
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
            'fnac' => '1585627200',
            'ci' => '12456587',
            'edad' => 12,
            'tutor' => 'Jose Perez',
            'direccion' => 'B/Fátima C/La morita #105',
            'telefono' => '356212',

        ]);

        // ----------- TRIMESTRE -------------

        DB::table('trimestre')->insert([
            'nombre' => 'Primer Trimestre',
            'inicio' => '1577851200',
            'fin' => '1588219200',
        ]);
        DB::table('trimestre')->insert([
            'nombre' => 'Segundo Trimestre',
            'inicio' => '1588305600',
            'fin' => '1598846400',
        ]);
        DB::table('trimestre')->insert([
            'nombre' => 'Tercer Trimestre',
            'inicio' => '1598932800',
            'fin' => '1609387200',
        ]);

        // ----------- MATERIAS --------------
        DB::table('materia')->insert([
            'nombre' => 'Comunicacion y lenguajes',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Ciencias Sociales',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Educacion Musical',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Educacion Fisica y Deportes',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Artes Plasticas y visuales',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Ciencias Naturales',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Matematicas',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Tecnica Tecnologica',
        ]);
        DB::table('materia')->insert([
            'nombre' => 'Valores, espiritualidades y religiones',
        ]);
    }
}
