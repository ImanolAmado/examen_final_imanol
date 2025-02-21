@extends('layouts.plantilla')

@section('title', 'El arca del Cine Perdido')
@section('page_title', 'Actores y actrices sin películas')

@section('content')   
   
    <div class="mt-5">
        <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Fecha Nacimiento</th>    
                <th class="px-4 py-2">Género</th>
                <th class="px-4 py-2">Email</th>  
                <th class="px-4 py-2">Teléfono</th>
            </tr>    
        </thead>
        <tbody>
            @foreach($actores as $actor)
            @if($actor->peliculas->count() > 0)
            @else
            <tr>
                <td>{{$actor->nombre}}</td>             
                <td>{{$actor->fecha_nacimiento}}</td> 
                <td>{{$actor->genero}}</td> 
                <td>{{$actor->email}}</td> 
                <td>{{$actor->telefono}}</td>      
            </tr> 
            @endif
            @endforeach
        </tbody>
        </table>
        
        </div>
@endsection