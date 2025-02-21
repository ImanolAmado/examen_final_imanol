<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Actor;

class HomeController extends Controller
{
    public function welcome()
    {
        //Gestionar información de pantalla

        $actores = Actor::all()->count();
        $peliculas = Pelicula::all()->count();

        return view('welcome', compact('actores','peliculas'));
    }
}
