@extends('layouts.plantilla')

@section('title', 'El arca del Cine Perdido')
@section('page_title', 'Administrar actores y actrices')

@section('content')
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-md p-6">
    </div>
    <div>
        <h4>Actores y Actrices sin películas</h4>
    </div>


    <div class="mt-5">
        <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Películas</th>
                <th class="px-4 py-2">Actores</th>    
            </tr>    
        </thead>
        <tbody>
            @foreach($peliculas as $pelicula)
            @if($pelicula->actors->count() >0)
            <tr>
                <td>{{$pelicula->titulo}}</td>
                <td>
                @foreach($pelicula->actors as $actor)
                {{$actor->nombre}}
                @endforeach
                <td>
            </tr> 
            @endif
            @endforeach
        </tbody>
        </table>
        
        </div>
@endsection