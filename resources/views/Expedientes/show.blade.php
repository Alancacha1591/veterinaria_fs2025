{{--Se incluye layouts para reutilizar la estructura de la pagina--}}
{{--layouts.app ya incluye el header la barra de navegacion--}}
@extends('layouts.app')

{{--Se establece el titulo de la pagina--}}
@section('title', 'Expediente: ' . ($expediente->nombre_paciente ?? 'Detalle'))

{{-- Se establece el contenido de la pagina --}}
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!--Se muestran los datos del expediente y los botones de regresar a la lista y de editar-->
                    <h5 class="mb-0">Datos del Expediente</h5>
                    <div>
                        <a href="{{ route('expedientes.index') }}" class="btn btn-sm btn-secondary">Regresar a la lista</a>
                        <a href="{{ route('expedientes.edit', $expediente->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Se muestran los datos del expediente -->
                    <dl class="row">
                        <dt class="col-sm-4">ID</dt>
                        <dd class="col-sm-8">{{ $expediente->id }}</dd>

                        <dt class="col-sm-4">Numero expediente</dt>
                        <dd class="col-sm-8">{{ $expediente->numero_expediente }}</dd>

                        <dt class="col-sm-4">Nombre paciente</dt>
                        <dd class="col-sm-8">{{ $expediente->nombre_paciente }}</dd>

                        <dt class="col-sm-4">Ultima cita</dt>
                        <dd class="col-sm-8">{{ $expediente->ultima_cita }}</dd>

                        <dt class="col-sm-4">Vacunas puestas</dt>
                        <dd class="col-sm-8">{{ $expediente->vacunas_puestas }}</dd>

                        <dt class="col-sm-4">Vencimiento vacunas</dt>
                        <dd class="col-sm-8">{{ $expediente->vencimiento_vacunas }}</dd>

                        <dt class="col-sm-4">Próxima revisión</dt>
                        <dd class="col-sm-8">{{ $expediente->proxima_revision }}</dd>

                        <dt class="col-sm-4">Nombre dueño</dt>
                        <dd class="col-sm-8">{{ $expediente->nombre_dueno }}</dd>

                        <dt class="col-sm-4">Teléfono dueño</dt>
                        <dd class="col-sm-8">{{ $expediente->telefono_dueno }}</dd>

                        <dt class="col-sm-4">Diagnóstico actual</dt>
                        <dd class="col-sm-8">{{ $expediente->diagnostico_actual }}</dd>

                        <dt class="col-sm-4">Tratamiento actual</dt>
                        <dd class="col-sm-8">{{ $expediente->tratamiento_actual }}</dd>
                    </dl>
                </div>
                <div class="card-footer text-end">
                    <!--Se incluye tambien el boton para eliminar con la funcion de Javascript-->
                    <form action="{{ route('expedientes.destroy', $expediente->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection