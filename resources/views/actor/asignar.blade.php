@extends('layouts.plantilla')

@section('title', 'El arca del Cine Perdido')
@section('page_title', 'Asignar actores a películas')

@section('content')
<div class=" flex justify-center space-y-8">

<form class="mt-5" action="{{route('actor.asignar')}}" method='post'>
@csrf
    <label for="actor">Actor / Actriz</label>
    <select class="ml-2" id="actor" name="actor">
        @foreach($actores as $actor)
        <option value={{$actor->id}}>{{$actor->nombre}}</option>
        @endforeach
    </select>
   
    <label class="ml-4" for="pelicula">Pelicula</label>
    <select class="ml-2" id="pelicula" name="pelicula">
        @foreach($peliculas as $pelicula)
        <option value={{$pelicula->id}}>{{$pelicula->titulo}}</option>
        @endforeach
    </select>
    
    <button class="ml-4 bg-blue-600 text-white p-2" type="submit">Asignar</button>
</form>
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
