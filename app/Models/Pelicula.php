<?php

namespace App\Models;

use \App\Models\Genero;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    public function genero()
    {
        return $this->belongsTo(Genero::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class);

    }


}
