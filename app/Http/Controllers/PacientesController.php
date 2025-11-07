<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    //

    function index() {
        $pacientes=Pacientes::all();
        return view('pacientes.index',['pacientes'=>$pacientes]);
    }

    function show($num_expediente) {
        $paciente = Pacientes::where('num_expediente', $num_expediente)->first();
        return view('pacientes.show',['paciente'=>$paciente]);
    }

    public function create() {
        return view('pacientes.create');
    }

    public function edit($num_expediente) {
        $paciente = Pacientes::where('num_expediente', $num_expediente)->first();
        if (!$paciente) {
            return redirect()->route('pacientes.index')->with('error', 'Paciente no encontrado.');
        }
        return view('pacientes.edit', ['paciente' => $paciente]);
    }

    public function store(Request $request) {
        $paciente = new Pacientes();
        $paciente->num_expediente = $request->input('num_expediente');
        $paciente->nombre = $request->input('nombre');
        $paciente->raza = $request->input('raza'); 
        $paciente->diagnostico = $request->input('diagnostico');
        $paciente->edad = $request->input('edad');
        $paciente->sexo = $request->input('sexo');
        $paciente->save();

        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente.');
    }

    public function destroy($num_expediente){
        $paciente = Pacientes::where('num_expediente', $num_expediente)->first();
        if(!$paciente){
            return redirect()->route('pacientes.index')->with('error','Paciente no encontrado.');
        }
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success','Paciente eliminado exitosamente.');
    }

    function update(Request $request, $num_expediente) {
        $paciente = Pacientes::where('num_expediente', $num_expediente)->first();
        if (!$paciente) {
            return redirect()->route('pacientes.index')->with('error', 'Paciente no encontrado.');
        }

        $paciente->num_expediente = $request->input('num_expediente');
        $paciente->nombre = $request->input('nombre');
        $paciente->raza = $request->input('raza'); 
        $paciente->diagnostico = $request->input('diagnostico');
        $paciente->edad = $request->input('edad');
        $paciente->sexo = $request->input('sexo');
        $paciente->save();

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente.');
    }
}
