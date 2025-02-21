@extends('layouts.plantilla')

@section('content')
    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-md">
            {{ session('error') }}
        </div>
    @endif
    <!-- Contenido Principal -->
    <div class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-1 gap-6">
        <!-- Información General de Cursos -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">El Arca del Cine Perdido</h3>
            <p class="text-gray-700">
                Disponemos de una base de <i>(<b>{{$peliculas}}</b> con la cantidad de peliculas)</i> peliculas.
            </p>
            <p class="text-gray-700">
                Dispruta de nuestra lista de <i>(<b>{{$actores}}</b> de actores y actrices)</i> actores.
            </p>
        </div>
    </div>
@endsection