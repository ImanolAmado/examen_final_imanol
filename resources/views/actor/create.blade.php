@extends('layouts.plantilla')

@section('title', 'El arca del Cine Perdido')
@section('page_title', 'Añadir actores y actrices')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-md p-6">

    <div class="flex justify-center">

    <form action="{{route('actor.crear')}}" method="post">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" required>
    @error('nombre')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br>
    
    <label for="fecha">Fecha nacimiento</label>
    <input type="date" id="fecha" name="fecha" required>
    @error('fecha')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br>

    <label for="genero">Género</label>
    <select id="genero" name="genero" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
    </select>
    @error('genero')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br>

    <label for="email">Email</label>
    <input type="email" id="email" name="email">
    @error('email')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br>

    <label for="telefono">Teléfono</label>
    <input type="number" id="telefono" name="telefono">
    @error('telefono')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br>

    <label for="dieccion">Dirección</label>
    <input type="text" id="direccion" name="direccion">
    @error('direccion')
    <p style="color:red">{{$message}}</p>
    @enderror
    <br><br> 
    
    <button type="submit" class="bg-blue-500 text-white p-2">Crear Actor / Actriz</button>
</div>
</div>



@endsection
