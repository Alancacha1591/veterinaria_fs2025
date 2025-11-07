{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Paciente: ' . ($paciente->nombre ?? 'Detalle'))

{{-- Se establece el contenido de la pagina --}}
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!--Se muestran los datos del paciente y los botones de regresar a la lista y de editar-->
                    <h5 class="mb-0">Datos del Paciente</h5>
                    <div>
                        <a href="{{ route('pacientes.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                        <a href="{{ route('pacientes.edit', $paciente->num_expediente) }}" class="btn btn-sm btn-warning">Editar</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Se muestran los datos del paciente -->
                    <dl class="row">
                        <dt class="col-sm-4">No. Expediente</dt>
                        <dd class="col-sm-8">{{ $paciente->id }}</dd>

                        <dt class="col-sm-4">Nombre</dt>
                        <dd class="col-sm-8">{{ $paciente->nombre }}</dd>

                        <dt class="col-sm-4">Raza</dt>
                        <dd class="col-sm-8">{{ $paciente->raza }}</dd>

                        <dt class="col-sm-4">Diagnóstico</dt>
                        <dd class="col-sm-8">{{ $paciente->diagnostico }}</dd>

                        <dt class="col-sm-4">Edad</dt>
                        <dd class="col-sm-8">{{ $paciente->edad }}</dd>

                        <dt class="col-sm-4">Sexo</dt>
                        <dd class="col-sm-8">{{ $paciente->sexo }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-end">
                    <!--Se incluye tambien el boton para eliminar con la funcion de Javascript-->
                    <form action="{{ route('pacientes.destroy', $paciente->num_expediente) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection