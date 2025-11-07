{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Crear Expediente')

{{-- Se establece el contenido de la pagina --}}
@section('content')
    {{-- Contenedor principal: centramos el formulario y añadimos margen --}}
    <div class="row my-4">
        {{-- Hacemos la tarjeta un poco más ancha para el layout de 2 columnas --}}
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            {{-- Tarjeta para el formulario de creación --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{-- Título y acción rápida --}}
                    <h5 class="mb-0">Registrar Nuevo Expediente</h5>
                    <div>
                        <a href="{{ route('expedientes.index') }}" class="btn btn-sm btn-secondary">Volver a la lista</a>
                    </div>
                </div>

                <form action="{{ route('expedientes.store') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        {{-- CAMBIO: Se reincorpora el campo ID --}}
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="id" class="form-label">ID</label>
                                <input type="text" id="id" name="id" class="form-control" value="{{ old('id') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="numero_expediente" class="form-label">Número de expediente</label>
                                <input type="text" id="numero_expediente" name="numero_expediente" class="form-control" value="{{ old('numero_expediente') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nombre_paciente" class="form-label">Nombre del paciente</label>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control" value="{{ old('nombre_paciente') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre_dueno" class="form-label">Nombre del dueño</label>
                                <input type="text" id="nombre_dueno" name="nombre_dueno" class="form-control" value="{{ old('nombre_dueno') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefono_dueno" class="form-label">Teléfono del dueño</label>
                                <input type="text" id="telefono_dueno" name="telefono_dueno" class="form-control" value="{{ old('telefono_dueno') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ultima_cita" class="form-label">Última cita</label>
                                <input type="date" id="ultima_cita" name="ultima_cita" class="form-control" value="{{ old('ultima_cita') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="proxima_revision" class="form-label">Próxima revisión</label>
                                <input type="date" id="proxima_revision" name="proxima_revision" class="form-control" value="{{ old('proxima_revision') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="vacunas_puestas" class="form-label">Vacunas puestas</label>
                                <input type="text" id="vacunas_puestas" name="vacunas_puestas" class="form-control" value="{{ old('vacunas_puestas') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="vencimiento_vacunas" class="form-label">Vencimiento vacunas</label>
                                <input type="date" id="vencimiento_vacunas" name="vencimiento_vacunas" class="form-control" value="{{ old('vencimiento_vacunas') }}" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="diagnostico_actual" class="form-label">Diagnóstico actual</label>
                                <input type="text" id="diagnostico_actual" name="diagnostico_actual" class="form-control" value="{{ old('diagnostico_actual') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="tratamiento_actual" class="form-label">Tratamiento actual</label>
                                <input type="text" id="tratamiento_actual" name="tratamiento_actual" class="form-control" value="{{ old('tratamiento_actual') }}" required>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">
                        <a href="{{ route('expedientes.index') }}" class="btn btn-danger me-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
```



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