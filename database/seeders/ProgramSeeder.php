<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Program::create([
            'nombre'=>'Ingenieria Informatica',
            'descripcion'=>'programa de prueba',
            'codigo_snies'=>'123456',
            'resolucion'=>'123456',
            'estado'=>'1',
        ]);
    }

}
