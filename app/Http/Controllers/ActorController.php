<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use \Gate;

class ActorController extends Controller
{
   
    public function index()
    {
        
        $actores = Actor::all();
        $peliculas = Pelicula::orderBy('titulo', 'asc')->get();

        return view('actor.asignar', compact('actores','peliculas'));
    }


    public function asignarActor(Request $request){

    if( $request->actor && $request->pelicula != null){

    $actor = Actor::find($request->actor);  

    $actor->peliculas()->attach($request->pelicula);

    }

    return redirect()->route('asignar');

    }



    public function administrar(){

        if(Gate::denies('verActors', Actor::class)){

            return abort(403, "No estás autorizado a ver este contenido");
        }

        $actores = Actor::all();

        return view('actor.administrar', compact('actores'));

    }

  
    public function create()
    {        
        return view('actor.create');
    }


    public function crearActor(Request $request){

        $request->validate ([

        'nombre' => 'required|string|max:100',
        'email' => 'required|email',
        'fecha' => 'required|date',
        'telefono' => 'required|integer|max_digits:9|min_digits:9',
        'direccion' => 'required|string|max:30',
        'genero' => 'required|in:masculino,femenino,otro',
        ]);

        $actor = new Actor();

        $actor->nombre = $request->nombre;
        $actor->email = $request->email;
        $actor->genero = $request->genero;
        $actor->fecha_nacimiento = $request->fecha;
        $actor->direccion = $request->direccion;
        $actor->telefono = $request->telefono;

        $actor->save();

        return redirect()->route('home');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
