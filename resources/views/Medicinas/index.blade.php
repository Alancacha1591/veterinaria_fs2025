{{-- Vista para mostrar la lista de veterinarios --}}

{{--Se incluye la vista de layout principal que contiene la estructura básica de la página --}}
@extends('layouts.app')

{{--Se establece el titulo de la página--}}
@section('title', 'Lista de Medicinas')

{{--Se define el contenido de la página--}}
@section('content')
    {{-- Contenedor principal --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Lista de Medicinas</h1>
        <div>
            <a href="{{ route('medicinas.create') }}" class="btn btn-warning me-2">Nuevo</a>
        </div>
    </div>

    {{-- Tabla de medicinas --}}
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    {{--Cabecera de la tabla --}}
                    <thead class="table-light">
                        {{--Filas de los encabezados --}}
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Nombre</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col" class="text-center">Indicacion</th>
                            <th scope="col" class="text-center">Dosis</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    {{--Contenido o cuerpo de la tabla --}}
                    <tbody>
                        @foreach ($medicinas as $medicina)
                        {{--Filas de medicina --}}
                            <tr>
                                <th scope="row" class="text-center">{{ $medicina->id }}</th>
                                <td class="text-center">{{ $medicina->nombre }}</td>
                                <td class="text-center">{{ $medicina->precio }}</td>
                                <td class="text-center">{{ $medicina->indicacion }}</td>
                                <td class="text-center">{{ $medicina->dosis }}</td>
                                <td class="text-center">
                                    {{-- Botones de ver y editar --}}
                                    <a href="{{ route('medicinas.show', $medicina->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('medicinas.edit', $medicina->id) }}" class="btn btn-sm btn-outline-success">Editar</a>
                                    {{-- Parte del formulario para eliminar --}}
                                    <form action="{{ route('medicinas.destroy', $medicina->id) }}" method="POST" class="d-inline ">
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



<!-- codigo original y comentado - ejemplo adaptado a medicinas
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Medicinas (Ejemplo comentado)</title>
</head>
<body>
    <h1> Lista de Medicinas </h1>

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

    <a href="{{--route('medicinas.create')--}}">Nuevo</a>
    <button type="button" onclick="window.location.href='{{-- url('/') --}}'">Regresar al Inicio</button>

    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Indicacion</th>
            <th>Dosis</th>
        </tr>
        {{-- @foreach ($medicinas as $medicina) --}}
        <tr>
            <td>{{-- $medicina->id --}}</td>
            <td>{{-- $medicina->nombre --}}</td>
            <td>{{-- $medicina->precio --}}</td>
            <td>{{-- $medicina->indicacion --}}</td>
            <td>{{-- $medicina->dosis --}}</td>
            <td>
                <a href="{{-- route('medicinas.show', $medicina->id) --}}">Ver detalles</a>
                <a href="{{-- route('medicinas.edit', $medicina->id) --}}">Editar</a>
                <form action="{{-- route('medicinas.destroy', $medicina->id) --}}" method="POST" style="display:inline;">
                    {{-- @csrf --}}
                    {{-- @method('DELETE') --}}
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        {{-- @endforeach --}}
    </table>
</body>
</html>
-->