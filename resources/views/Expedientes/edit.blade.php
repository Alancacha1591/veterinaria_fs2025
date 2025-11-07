{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Editar Expediente')

{{-- Se establece el contenido de la pagina --}}
@section('content')
    {{--Contenedor principal, la columna centrada y con margenes--}}
    <div class="row my-4">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            {{--se crea la seccion del formulario para editar --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{--Titulo de la seccion y boton para regressar a la lista--}}
                    <h5 class="mb-0">Editar Expediente</h5>
                    <div>
                        {{--Boton para regresar a la lista de expedientes --}}
                        <a href="{{ route('expedientes.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                    </div>
                </div>

                <form action="{{ route('expedientes.update', $expediente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="id" class="form-label">ID</label>
                                {{-- CAMBIO: Se eliminó 'readonly' para que sea editable --}}
                                <input type="text" id="id" name="id" class="form-control" value="{{ $expediente->id }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="numero_expediente" class="form-label">Número de expediente</label>
                                <input type="text" id="numero_expediente" name="numero_expediente" class="form-control" value="{{ old('numero_expediente', $expediente->numero_expediente) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nombre_paciente" class="form-label">Nombre del paciente</label>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control" value="{{ old('nombre_paciente', $expediente->nombre_paciente) }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre_dueno" class="form-label">Nombre del dueño</label>
                                <input type="text" id="nombre_dueno" name="nombre_dueno" class="form-control" value="{{ old('nombre_dueno', $expediente->nombre_dueno) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telefono_dueno" class="form-label">Teléfono del dueño</label>
                                <input type="text" id="telefono_dueno" name="telefono_dueno" class="form-control" value="{{ old('telefono_dueno', $expediente->telefono_dueno) }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ultima_cita" class="form-label">Última cita</label>
                                <input type="date" id="ultima_cita" name="ultima_cita" class="form-control" value="{{ old('ultima_cita', $expediente->ultima_cita) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="proxima_revision" class="form-label">Próxima revisión</label>
                                <input type="date" id="proxima_revision" name="proxima_revision" class="form-control" value="{{ old('proxima_revision', $expediente->proxima_revision) }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="vacunas_puestas" class="form-label">Vacunas puestas</label>
                                <input type="text" id="vacunas_puestas" name="vacunas_puestas" class="form-control" value="{{ old('vacunas_puestas', $expediente->vacunas_puestas) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="vencimiento_vacunas" class="form-label">Vencimiento vacunas</label>
                                <input type="date" id="vencimiento_vacunas" name="vencimiento_vacunas" class="form-control" value="{{ old('vencimiento_vacunas', $expediente->vencimiento_vacunas) }}" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="diagnostico_actual" class="form-label">Diagnóstico actual</label>
                                <input type="text" id="diagnostico_actual" name="diagnostico_actual" class="form-control" value="{{ old('diagnostico_actual', $expediente->diagnostico_actual) }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="tratamiento_actual" class="form-label">Tratamiento actual</label>
                                <input type="text" id="tratamiento_actual" name="tratamiento_actual" class="form-control" value="{{ old('tratamiento_actual', $expediente->tratamiento_actual) }}" required>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">
                        {{-- Botones: actualizar y cancelar --}}
                        <a href="{{ route('expedientes.index') }}" class="btn btn-danger me-2">Cancelar</a>
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