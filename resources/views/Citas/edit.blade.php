@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Cita: ' . ($cita->id ?? 'Editar'))

{{-- e establece el contenido de la pagina --}}
@section('content')
    {{--Contenedor principal, la columna centrada y con margenes--}}
    <div class="row my-4">
        <div class="col-12 col-md-8 mx-auto">
            {{--se crea la seccion del formulario para editar --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{--Titulo de la seccion y boton para regressar a la lista--}}
                    <h5 class="mb-0">Editar Cita</h5>
                    <div>
                        {{--Boton para regresar a la lista de veterinarios --}}
                        <a href="{{ route('citas.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                    </div>
                </div>

                <!--Formulario para editar los datos del veterinario-->
                <form action="{{ route('citas.update', $cita->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        {{--Inputs para editar los datos del veterinario--}}
                       <div class="col-md-4 mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" value="{{ $cita->id }}" required>
                        </div>

                        <div class="row"> <!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="fecha" class="form-label">FECHA</label>
                                <input type="text" id="fecha" name="fecha" class="form-control" value="{{ old('fecha', $cita->fecha) }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control" value="{{ old('nombre_paciente', $cita->nombre_paciente) }}" required>
                            </div>
                        </div>

                        <div class="row"><!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="telefono_paciente" class="form-label">Telefono Paciente</label>
                                <input type="text" id="telefono_paciente" name="telefono_paciente" class="form-control" value="{{ old('telefono_paciente', $cita->telefono_paciente) }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="motivo" class="form-label">Motivo</label>
                                <input type="text" id="motivo" name="motivo" class="form-control" value="{{ old("motivo", $cita->motivo) }}" required>
                            </div>
                        </div>

                        

                    </div>

                    <div class="card-footer text-end">
                        {{-- Botones: actualizar y cancelar --}}
                        <a href="{{ route('citas.index') }}" class="btn btn-danger me-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
