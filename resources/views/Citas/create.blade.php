@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Citas: ' . ($cita->id ?? 'Crear Medicina'))

{{-- Se establece el contenido de la pagina --}}

@section('content')
    {{-- Contenedor principal: centramos el formulario y añadimos margen --}}
    <div class="row my-4">
        <div class="col-12 col-md-8 mx-auto">
            {{-- Tarjeta para el formulario de creación --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{-- Título y acción rápida --}}
                    <h5 class="mb-0">Registrar Nueva Cita</h5>
                    <div>
                        <a href="{{ route('citas.index') }}" class="btn btn-sm btn-secondary">Volver a la lista</a>
                    </div>
                </div>

                <form action="{{ route('citas.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        {{--Inputs para crear un nuevo veterinario (orden y clases iguales que en edit) --}}
                        <div class="col-md-4 mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" value="{{ old('id') }}">
                        </div>

                        <div class="row"> <!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="text" id="fecha" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
                                <input type="text" id="nombre_paciente" name="nombre_paciente" class="form-control" value="{{ old('nombre_paciente') }}" required>
                            </div>
                        </div>

                        <div class="row"><!-- clase row para que se vea en una fila-->
                            <div class="col-md-4 mb-3">
                                <label for="telefono_paciente" class="form-label">Telefono Paciente</label>
                                <input type="text" id="telefono_paciente" name="telefono_paciente" class="form-control" value="{{ old('telefono_paciente') }}" required>
                            </div>

                            <div class="col-md-8 mb-3">
                                <label for="motivo" class="form-label">Motivo</label>
                                <input type="text" id="motivo" name="motivo" class="form-control" value="{{ old("motivo") }}" required>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-end">
                        <a href="{{ route('citas.index') }}" class="btn btn-danger me-2">Cancelar</a>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
