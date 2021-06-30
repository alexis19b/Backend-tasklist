<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([
            [
                'name' => 'Estuidar React Js',
                'description' => 'Buscar la documentacion, realizar ejercicios practicos, estudiar los hooks.',
                'confirmed' => false,
            ],
            [
                'name' => 'Estuidar Laravel',
                'description' => 'Buscar tutoriales en youtube, realizar ejercicios practicos, estudiar MVC.',
                'confirmed' => false, 
            ]

        ]);
    }
}
