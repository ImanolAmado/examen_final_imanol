<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Pelicula;

class PeliculasSeeder extends Seeder
{
    public function run()
    {
        DB::table('peliculas')->insert([
            ['titulo' => 'Acción Imparable', 'anio' => 2010, 'recaudacion' => 150000.00, 'genero' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'La Última Batalla', 'anio' => 2012, 'recaudacion' => 200000.50, 'genero' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Misión Extrema', 'anio' => 2015, 'recaudacion' => 175000.75, 'genero' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Risas Sin Fin', 'anio' => 2008, 'recaudacion' => 120000.00, 'genero' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'El Gran Chiste', 'anio' => 2011, 'recaudacion' => 130000.00, 'genero' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Locura en la Ciudad', 'anio' => 2014, 'recaudacion' => 140000.25, 'genero' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Humor a Tope', 'anio' => 2018, 'recaudacion' => 160000.00, 'genero' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Historias de Vida', 'anio' => 2005, 'recaudacion' => 90000.00, 'genero' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Lágrimas de Ayer', 'anio' => 2009, 'recaudacion' => 95000.50, 'genero' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'El Último Adiós', 'anio' => 2013, 'recaudacion' => 110000.00, 'genero' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'El Futuro Ahora', 'anio' => 2010, 'recaudacion' => 210000.00, 'genero' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Planeta Desconocido', 'anio' => 2012, 'recaudacion' => 220000.00, 'genero' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Universo Paralelo', 'anio' => 2016, 'recaudacion' => 230000.75, 'genero' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Dimensión X', 'anio' => 2019, 'recaudacion' => 240000.50, 'genero' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'El Viaje Estelar', 'anio' => 2020, 'recaudacion' => 250000.00, 'genero' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Noche de Pánico', 'anio' => 2007, 'recaudacion' => 80000.00, 'genero' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Sustos en la Oscuridad', 'anio' => 2011, 'recaudacion' => 85000.00, 'genero' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'El Misterio del Bosque', 'anio' => 2015, 'recaudacion' => 90000.50, 'genero' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Mundo Mágico', 'anio' => 2003, 'recaudacion' => 70000.00, 'genero' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Aventuras Animadas', 'anio' => 2006, 'recaudacion' => 75000.00, 'genero' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'La Gran Aventura', 'anio' => 2009, 'recaudacion' => 80000.00, 'genero' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Sueños en Color', 'anio' => 2012, 'recaudacion' => 85000.25, 'genero' => 6, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}