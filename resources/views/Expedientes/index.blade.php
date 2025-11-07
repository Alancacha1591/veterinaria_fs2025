{{-- Vista para mostrar la lista de veterinarios --}}

{{--Se incluye la vista de layout principal que contiene la estructura básica de la página --}}
@extends('layouts.app')

{{--Se establece el titulo de la página--}}
@section('title', 'Lista de Expedientes')

{{--Se define el contenido de la página--}}
@section('content')
    {{-- Contenedor principal --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Lista de Expedientes</h1>
        <div>
            <a href="{{ route('expedientes.create') }}" class="btn btn-warning me-2">Nuevo</a>
        </div>
    </div>

    {{-- Tabla de expedientes --}}
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    {{--Cabecera de la tabla --}}
                    <thead class="table-light">
                        {{--Filas de los encabezados --}}
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Número de Expediente</th>
                            <th scope="col" class="text-center">Nombre del Paciente</th>
                            <th scope="col" class="text-center">Nombre del Dueño</th>
                            <th scope="col" class="text-center">Próxima Revisión</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    {{--Contenido o cuerpo de la tabla --}}
                    <tbody>
                        @foreach ($expedientes as $expediente)
                        {{--Filas de expediente --}}
                            <tr>
                                <th scope="row" class="text-center">{{ $expediente->id }}</th>
                                <td class="text-center">{{ $expediente->numero_expediente }}</td>
                                <td class="text-center">{{ $expediente->nombre_paciente }}</td>
                                <td class="text-center">{{ $expediente->nombre_dueno }}</td>
                                <td class="text-center">{{ $expediente->proxima_revision }}</td>
                                <td class="text-center">
                                    {{-- Botones de ver y editar --}}
                                    <a href="{{ route('expedientes.show', $expediente->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('expedientes.edit', $expediente->id) }}" class="btn btn-sm btn-outline-success">Editar</a>
                                    {{-- Parte del formulario para eliminar --}}
                                    <form action="{{ route('expedientes.destroy', $expediente->id) }}" method="POST" class="d-inline ">
                                        @csrf
                                        @method('DELETE')
                                        {{--Boton para eliminar un registro con un funcion para confirmar --}}
                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



<!-- codigo original y comentado
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Veterinarios</title>
</head>
<body>
    <h1> Lista de Veterinarios </h1>

    {{-- Mostrar mensajes de éxito o error --}}
    {{--@if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border: 1px solid #c3e6cb; border-radius: 4px;">
            {{-- session('success') }}
        </div>
    {{--@endif
    
    {{--@if(session('error'))
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border: 1px solid #f5c6cb; border-radius: 4px;">
            {{-- session('error') }}
        </div>
    {{--@endif--}

    <a href="{{--route('veterinarios.create')}}">Nuevo</a>
    <button type="button" onclick="window.location.href='{{-- url('/') }}'">Regresar al Inicio</button>

    <table >
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Especialidad</th>
            <th>Telefono</th>
        </tr>
        {{-- @foreach ($veterinarios as $veterinario) --}}
        <tr>
            <td>{{-- $veterinario->id }}</td>
            <td>{{-- $veterinario->nombre }}</td>
            <td>{{-- $veterinario->apellidos }}</td>
            <td>{{-- $veterinario->edad }}</td>
            <td>{{-- $veterinario->especialidad }}</td>
            <td>{{-- $veterinario->telefono }}</td>
            <td>
                <td>
                <a href="{{-- route('veterinarios.show', $veterinario->id) }}">Ver detalles</a>
                <a href="{{-- route('veterinarios.edit', $veterinario->id) }}">Editar</a>
                <form action="{{-- route('veterinarios.destroy', $veterinario->id) }}" method="POST" style="display:inline;">
                    {{-- @csrf --}}
                    {{-- @method('DELETE') --}}
                    <button type="submit">Eliminar</button>
                </form>
            </td>
            </td>
        </tr>
        {{-- @endforeach --}}
    </table>
</body>
</html>
-->