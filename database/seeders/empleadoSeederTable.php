<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class empleadoSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Gladis Fernandez',
            'email'=> 'gfernandez@example.com',
            'sexo'=> 'F',
            'area_id'=> 1,
            'boletin'=>1,
            'descripcion'=> 'no tiene descripcion',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
