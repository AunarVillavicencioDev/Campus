<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'type_document' => 'CC',
            'document' => '1234567890',
            'name' => 'Admin',
            'email' => 'admin@themesbrand.com',
            'password' => Hash::make('12345678'),
            'movil' => '3121234567',
            'aceptar_terminos' => 'Acepto',
            'created_at' => now(),
            'profile' =>'1',
        ]);
    }

}
