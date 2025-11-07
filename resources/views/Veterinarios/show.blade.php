{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Veterinario: ' . ($veterinario->nombre ?? 'Detalle'))

{{-- Se establece el contenido de la pagina --}}
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!--Se muestran los datos del veterinario y los botones de regresar a la lista y de editar-->
                    <h5 class="mb-0">Datos del Veterinario</h5>
                    <div>
                        <a href="{{ route('veterinarios.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                        <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Se muestran los datos del veterinario -->
                    <dl class="row">
                        <dt class="col-sm-4">ID</dt>
                        <dd class="col-sm-8">{{ $veterinario->id }}</dd>

                        <dt class="col-sm-4">Nombre</dt>
                        <dd class="col-sm-8">{{ $veterinario->nombre }}</dd>

                        <dt class="col-sm-4">Apellidos</dt>
                        <dd class="col-sm-8">{{ $veterinario->apellidos }}</dd>

                        <dt class="col-sm-4">Edad</dt>
                        <dd class="col-sm-8">{{ $veterinario->edad }}</dd>

                        <dt class="col-sm-4">Especialidad</dt>
                        <dd class="col-sm-8">{{ $veterinario->especialidad }}</dd>

                        <dt class="col-sm-4">Teléfono</dt>
                        <dd class="col-sm-8">{{ $veterinario->telefono }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-end">
                    <!--Se incluye tambien el boton para eliminar con la funcion de Javascript-->
                    <form action="{{ route('veterinarios.destroy', $veterinario->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



<!-- Codigo original
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos de Veterinario</title>
</head>
<body>
    <h1>Datos del Veterinario</h1>
    <a href="{{-- route('veterinarios.index') --}}">Regresar a la lista</a>
    <p>ID: {{-- $veterinario->id }}</p>
    <p>Nombre: {{-- $veterinario->nombre }}</p>
    <p>Apellidos: {{-- $veterinario->apellidos }}</p>
    <p>Edad: {{-- $veterinario->edad }}</p>
    <p>Especialidad: {{-- $veterinario->especialidad }}</p>
    <p>Teléfono: {{-- $veterinario->telefono }}</p>
</body>
</html>
-->