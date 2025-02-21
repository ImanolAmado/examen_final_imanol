<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('generos')->insert([
            ['nombre' => 'Acción', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Comedia', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ciencia Ficción', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Terror', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Animación', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
