@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Cita: ' . ($cita->id ?? 'Detalle'))

{{-- Se establece el contenido de la pagina --}}
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!--Se muestran los datos del veterinario y los botones de regresar a la lista y de editar-->
                    <h5 class="mb-0">Datos de la Cita</h5>
                    <div>
                        <a href="{{ route('citas.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                        <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Se muestran los datos de la medicina -->
                    <dl class="row">
                        <dt class="col-sm-4">ID</dt>
                        <dd class="col-sm-8">{{ $cita->id }}</dd>

                        <dt class="col-sm-4">Fecha</dt>
                        <dd class="col-sm-8">{{ $cita->fecha }}</dd>

                        <dt class="col-sm-4">Nombre Paciente</dt>
                        <dd class="col-sm-8">{{ $cita->nombre_paciente }}</dd>

                        <dt class="col-sm-4">Telefono Paciente</dt>
                        <dd class="col-sm-8">{{ $cita->telefono_paciente }}</dd>

                        <dt class="col-sm-4">Motivo</dt>
                        <dd class="col-sm-8">{{ $cita->motivo }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-end">
                    <!--Se incluye tambien el boton para eliminar con la funcion de Javascript-->
                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection