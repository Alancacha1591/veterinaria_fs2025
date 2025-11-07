{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Veterinario: ' . ($veterinario->nombre ?? 'Crear Veterinario'))

{{-- Se establece el contenido de la pagina --}}

@section('content')
    {{-- Contenedor principal: centramos el formulario y añadimos margen --}}
    <div class="row my-4">
        <div class="col-12 col-md-8 mx-auto">
            {{-- Tarjeta para el formulario de creación --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{-- Título y acción rápida --}}
                    <h5 class="mb-0">Registrar Nuevo Veterinario</h5>
                    <div>
                        <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-secondary">Volver a la lista</a>
                    </div>
                </div>

                <form action="{{ route('veterinarios.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        {{--Inputs para crear un nuevo veterinario (orden y clases iguales que en edit) --}}
                        <div class="col-md-4 mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" value="{{ old('id') }}">
                        </div>

                        <div class="row"> <!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ old('apellidos') }}" required>
                            </div>
                        </div>

                        <div class="row"><!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" id="edad" name="edad" class="form-control" value="{{ old('edad') }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="especialidad" class="form-label">Especialidad</label>
                                <input type="text" id="especialidad" name="especialidad" class="form-control" value="{{ old('especialidad') }}" required>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}" required>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="{{ route('veterinarios.index') }}" class="btn btn-danger me-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



<!--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo veterinario</title>
</head>
<body>
    <div class="container">
        <h1>REGISTRAR UN NUEVO VETERINARIO</h1>
        <form id="formulario" method="POST" action="{{--route('veterinarios.store')--}}">
            {{--@csrf--}}
            <div>
                <label for="id">ID: </label>
                <input type="text" id="id" name="id">
            </div>
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos">
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad">
            </div>
            <div>
                <label for="especialidad">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad">
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>
-->