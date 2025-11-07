{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Medicina: ' . ($medicina->nombre ?? 'Editar'))

{{-- e establece el contenido de la pagina --}}
@section('content')
    {{--Contenedor principal, la columna centrada y con margenes--}}
    <div class="row my-4">
        <div class="col-12 col-md-8 mx-auto">
            {{--se crea la seccion del formulario para editar --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{--Titulo de la seccion y boton para regressar a la lista--}}
                    <h5 class="mb-0">Editar Medicina</h5>
                    <div>
                        {{--Boton para regresar a la lista de veterinarios --}}
                        <a href="{{ route('medicinas.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                    </div>
                </div>

                <!--Formulario para editar los datos del veterinario-->
                <form action="{{ route('medicinas.update', $medicina->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        {{--Inputs para editar los datos del veterinario--}}
                        <div class="col-md-4 mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" value="{{ $medicina->id }}" required>
                        </div>

                        <div class="row"> <!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $medicina->nombre) }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" id="precio" name="precio" class="form-control" value="{{ old('precio', $medicina->precio) }}" required>
                            </div>
                        </div>
                        

                        <div class="col-md-8 mb-3">
                            <label for="indicacion" class="form-label">Indicacion</label>
                            <input type="text" id="indicacion" name="indicacion" class="form-control" value="{{ old('indicacion', $medicina->indicacion) }}" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="dosis" class="form-label">Dosis</label>
                            <input type="text" id="dosis" name="dosis" class="form-control" value="{{ old('dosis', $medicina->dosis) }}" required>
                        </div>
                        

                    </div>

                    <div class="card-footer text-end">
                        {{-- Botones: actualizar y cancelar --}}
                        <a href="{{ route('medicinas.index') }}" class="btn btn-danger me-2">Cancelar</a>
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
    <title>Editar medicina (comentario de ejemplo)</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR MEDICINA (Ejemplo comentado)</h1>
        <form id="formulario-medicina-editar" method="POST" action="{{-- route('medicinas.update', $medicina->id) --}}">
            {{-- @csrf
            @method('PUT') --}}
            <div>
                <label for="id">ID: </label>
                <input type="text" id="id" name="id" value="{{-- $medicina->id --}}" required>
            </div>
            <div>
                <label for="nombre">Nombre de la medicina: </label>
                <input type="text" id="nombre" name="nombre" value="{{-- $medicina->nombre --}}" required>
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio" value="{{-- $medicina->precio --}}" required>
            </div>
            <div>
                <label for="indicacion">Indicacion:</label>
                <input type="text" id="indicacion" name="indicacion" value="{{-- $medicina->indicacion --}}" required>
            </div>
            <div>
                <label for="dosis">Dosis:</label>
                <input type="text" id="dosis" name="dosis" value="{{-- $medicina->dosis --}}" required>
            </div>
            <div>
                <button type="submit">Actualizar Medicina</button>
                <a href="{{-- route('medicinas.index') --}}">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
-->