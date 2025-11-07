@extends('layouts.app')

{{--Se establece el titulo de la página--}}
@section('title', 'Lista de Citas')

{{--Se define el contenido de la página--}}
@section('content')
    {{-- Contenedor principal --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Lista de Citas</h1>
        <div>
            <a href="{{ route('citas.create') }}" class="btn btn-warning me-2">Nuevo</a>
        </div>
    </div>

    {{-- Tabla de medicinas --}}
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    {{--Cabecera de la tabla --}}
                    <thead class="table-light">
                        {{--Filas de los encabezados --}}
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Fecha</th>
                            <th scope="col" class="text-center">Nombre Paciente</th>
                            <th scope="col" class="text-center">Telefono Paciente</th>
                            <th scope="col" class="text-center">Motivo</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    {{--Contenido o cuerpo de la tabla --}}
                    <tbody>
                        @foreach ($citas as $cita)
                        {{--Filas de medicina --}}
                            <tr>
                                <th scope="row" class="text-center">{{ $cita->id }}</th>
                                <td class="text-center">{{ $cita->fecha }}</td>
                                <td class="text-center">{{ $cita->nombre_paciente }}</td>
                                <td class="text-center">{{ $cita->telefono_paciente }}</td>
                                <td class="text-center">{{ $cita->motivo }}</td>
                                <td class="text-center">
                                    {{-- Botones de ver y editar --}}
                                    <a href="{{ route('citas.show', $cita->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('citas.edit', $cita->id) }}" class="btn btn-sm btn-outline-success">Editar</a>
                                    {{-- Parte del formulario para eliminar --}}
                                    <form action="{{ route('citas.destroy', $cita->id) }}" method="POST" class="d-inline ">
                                        @csrf
                                        @method('DELETE')
                                        {{--Boton para eliminar un registro con un funcion para confirmar --}}
                                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="confirmDelete(this.form)">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
