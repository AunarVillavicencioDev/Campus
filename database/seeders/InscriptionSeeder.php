<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inscription;

class InscriptionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Inscription::create([
            'user_id' => '1',
            'pri_nombre' => 'Luis',
            'seg_nombre' => 'Erasmo',
            'pri_apellido' => 'Suarez',
            'seg_apellido' => 'Rondon',
            'fecha_nacimientos' => '2021-04-19 11:53:16',
            'municipio_nacimiento' => 'Villavicnecio',
            'deparatamento_nacimiento' => 'Meta',
            'pais_nacimiento' => 'Colombia',
            'fecha_expedicion' => '2021-04-19 11:53:16',
            'municipio_expedicion' => 'Villavicnecio',
            'deparatamento_expedicion' => 'Meta',
            'pais_expedicion' => 'Colombia',
            'estado_civil' => 'Soltero',
            'rh' => 'O-',
            'genero' => 'Hombre',
            'libreta_militar' => '1234567890',
            'estrato' => '3',
            'direcion_recidencia' => 'calle simbre viva',
            'municipio_recidencia' => 'Villavicnecio',
            'deparatamento_recidencia' => 'Meta',
            'pais_recidencia' => 'Colombia',
            'discapacidad' => 'No aplica',
            'numero_de_hijos' => '0',
            'programa_id' => '1',
            'periodo_academico' => '2021-2',
            'jornada' => 'Sabatina',
            'fecha_saber' => '2020-04-19 11:53:16',
            'codigo_saber' => '123455',
            'puntaje_saber' => '1234',
            'colegio' => 'caldas',
            'nivel_academico' => 'Tecnico',
            'eps' => 'Sanitas',
            'sisben' => 'Si',
        ]);
    }

}
