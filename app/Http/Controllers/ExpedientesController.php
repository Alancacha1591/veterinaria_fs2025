<?php

namespace App\Http\Controllers;

use App\Models\Expedientes;
use Illuminate\Http\Request;

class ExpedientesController extends Controller
{
    //

    function index() {
        $expediente = Expedientes::all();
        return view('expedientes.index', ['expedientes' => $expediente]);
    }

    function show($id) {
        $expediente = Expedientes::find($id);
        return view('expedientes.show', ['expediente' => $expediente]);
    }

    public function create() {
        return view('expedientes.create');
    }

    public function edit($id) {
        $expediente = Expedientes::find($id);
        if (!$expediente) {
            return redirect()->route('expedientes.index')->with('error', 'Expediente no encontrado.');
        }
        return view('expedientes.edit', ['expediente' => $expediente]);
    }

    public function store(Request $request) {
        $expediente = new Expedientes();
        $expediente->id = $request->input('id');
        $expediente->numero_expediente = $request->input('numero_expediente');
        $expediente->nombre_paciente = $request->input('nombre_paciente');
        $expediente->ultima_cita = $request->input('ultima_cita');
        $expediente->vacunas_puestas = $request->input('vacunas_puestas');
        $expediente->vencimiento_vacunas = $request->input('vencimiento_vacunas');
        $expediente->proxima_revision = $request->input('proxima_revision');
        $expediente->nombre_dueno = $request->input('nombre_dueno');
        $expediente->telefono_dueno = $request->input('telefono_dueno');
        $expediente->diagnostico_actual = $request->input('diagnostico_actual');
        $expediente->tratamiento_actual = $request->input('tratamiento_actual');
        $expediente->save();

        return redirect()->route('expedientes.index')->with('success', 'Expediente creado exitosamente.');
    }

    public function destroy($id){
        $expediente=Expedientes::find($id);
        if(!$expediente){
            return redirect()->route('expedientes.index')->with('error','Expediente no encontrado.');
        }
        $expediente->delete();
        return redirect()->route('expedientes.index')->with('success','Expediente eliminado exitosamente.');
    }

    function update(Request $request, $id) {
        $expediente = Expedientes::find($id);
        if (!$expediente) {
            return redirect()->route('expedientes.index')->with('error', 'Expediente no encontrado.');
        }

        $expediente->id = $request->input('id');
        $expediente->numero_expediente = $request->input('numero_expediente');
        $expediente->nombre_paciente = $request->input('nombre_paciente');
        $expediente->ultima_cita = $request->input('ultima_cita');
        $expediente->vacunas_puestas = $request->input('vacunas_puestas');
        $expediente->vencimiento_vacunas = $request->input('vencimiento_vacunas');
        $expediente->proxima_revision = $request->input('proxima_revision');
        $expediente->nombre_dueno = $request->input('nombre_dueno');
        $expediente->telefono_dueno = $request->input('telefono_dueno');
        $expediente->diagnostico_actual = $request->input('diagnostico_actual');
        $expediente->tratamiento_actual = $request->input('tratamiento_actual');
        $expediente->save();

        return redirect()->route('expedientes.index')->with('success', 'Expediente actualizado exitosamente.');
    }
}
