<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        //Gestionar información de pantalla
        return view('welcome');
    }
}
