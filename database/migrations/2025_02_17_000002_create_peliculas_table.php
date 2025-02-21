<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    public function up()
    {        
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->integer('anio');
            $table->decimal('recaudacion', 10, 2);
            $table->foreignId('genero')->constrained('generos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
