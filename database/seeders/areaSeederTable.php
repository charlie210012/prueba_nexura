<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areaSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'nombre' => 'Ventas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Calidad',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('areas')->insert([
            'nombre' => 'Produccion',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
