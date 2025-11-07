<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
class CitasController extends Controller
{
    //
    function index(){
        $citas = Cita::all();
        return view('citas.index',['citas'=>$citas]);
    }

    function show($id){
        $cita = Cita::find($id);
        return view('citas.show',['cita'=>$cita]);
    }

    public function create(){
        return view('citas.create');
    }

    public function edit($id){
        $cita = Cita::find($id);
        if (!$cita) {
            return redirect()->route('citas.index')->with('error', 'Cita no encontrada.');
        }
        return view('citas.edit', ['cita' => $cita]);
    }

    public function store(Request $request){
        $cita = new Cita();
        $cita->id = $request->input('id');
        $cita->fecha = $request->input('fecha');
        $cita->nombre_paciente = $request->input('nombre_paciente');
        $cita->telefono_paciente = $request->input('telefono_paciente');
        $cita->motivo = $request->input('motivo');
        $cita->save();
        return redirect()->route('citas.index')->with("success","Cita creada exitosamente.");
    }

    public function destroy($id){
        $cita = Cita::find($id);
        if ($cita) {
            $cita->delete();
            return redirect()->route('citas.index')->with("success","Cita eliminada exitosamente.");
        } else {
            return redirect()->route('citas.index')->with("error","Cita no encontrada.");
        }
    }

    function update(Request $request, $id){
        $cita = Cita::find($id);
        if (!$cita) {
            return redirect()->route('citas.index')->with('error', 'Cita no encontrada.');
        }
        $cita->id = $request->input('id');
        $cita->fecha = $request->input('fecha');
        $cita->nombre_paciente = $request->input('nombre_paciente');
        $cita->telefono_paciente = $request->input('telefono_paciente');
        $cita->motivo = $request->input('motivo');
        $cita->save();
        return redirect()->route('citas.index')->with("success","Cita actualizada exitosamente.");
    }
}
