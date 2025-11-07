{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Veterinario: ' . ($veterinario->nombre ?? 'Editar'))

{{-- e establece el contenido de la pagina --}}
@section('content')
    {{--Contenedor principal, la columna centrada y con margenes--}}
    <div class="row my-4">
        <div class="col-12 col-md-8 mx-auto">
            {{--se crea la seccion del formulario para editar --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{--Titulo de la seccion y boton para regressar a la lista--}}
                    <h5 class="mb-0">Editar Veterinario</h5>
                    <div>
                        {{--Boton para regresar a la lista de veterinarios --}}
                        <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                    </div>
                </div>

                <!--Formulario para editar los datos del veterinario-->
                <form action="{{ route('veterinarios.update', $veterinario->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        {{--Inputs para editar los datos del veterinario--}}
                        <div class="col-md-4 mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" value="{{ $veterinario->id }}" required>
                        </div>

                        <div class="row"> <!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $veterinario->nombre) }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" value="{{ old('apellidos', $veterinario->apellidos) }}" required>
                            </div>
                        </div>
                        

                        <div class="row"><!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" id="edad" name="edad" class="form-control" value="{{ old('edad', $veterinario->edad) }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="especialidad" class="form-label">Especialidad</label>
                                <input type="text" id="especialidad" name="especialidad" class="form-control" value="{{ old('especialidad', $veterinario->especialidad) }}" required>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono', $veterinario->telefono) }}" required>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        {{-- Botones: actualizar y cancelar --}}
                        <a href="{{ route('veterinarios.index') }}" class="btn btn-danger me-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Actualizar</button>
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
    <title>Editar datos de Veterinario</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR VETERINARIO</h1>
        <form id="formulario" method="POST" action="{{--route('veterinarios.update', $veterinario->id)--}}">
            {{--@csrf
            @method('PUT')--}}
            <div>
                <label for="id">ID: </label>
                <input type="text" id="id" name="id" value="{{--$veterinario->id}}" required>
            </div>
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="{{--$veterinario->nombre}}" required>
            </div>
            <div>
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="{{--$veterinario->apellidos}}" required>
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" value="{{--$veterinario->edad}}" required>
            </div>
            <div>
                <label for="especialidad">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" value="{{--$veterinario->especialidad}}" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="{{--$veterinario->telefono}}" required>
            </div>
            <div>
                <button type="submit">Actualizar</button>
                <a href="{{--route('veterinarios.index')--}}">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
-->