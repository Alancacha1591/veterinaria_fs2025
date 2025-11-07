<?php

namespace App\Http\Controllers;

use App\Models\Medicinas;
use Illuminate\Http\Request;

class MedicinasController extends Controller
{
    //
    function index() {
        $medicinas=Medicinas::all();
        return view('medicinas.index',['medicinas'=>$medicinas]);
    }

    function show($id) {
        $medicina=Medicinas::find($id);
        return view('medicinas.show',['medicina'=>$medicina]);
    }

    public function create() {
        return view('medicinas.create');
    }

    public function edit($id) {
        $medicina=Medicinas::find($id);
        if (!$medicina) {
            return redirect()->route('medicinas.index')->with('error', 'Medicina no encontrada.');
        }
        return view('medicinas.edit', ['medicina' => $medicina]);
    }

    public function store(Request $request) {
        $medicina = new Medicinas();
        $medicina->id = $request->input('id');
        $medicina->nombre = $request->input('nombre');
        $medicina->precio = $request->input('precio');
        $medicina->indicacion = $request->input('indicacion');
        $medicina->dosis = $request->input('dosis');
        $medicina->save();

        return redirect()->route('medicinas.index')->with('success', 'Medicina creada exitosamente.');
    }

    public function destroy($id){
        $medicina=Medicinas::find($id);
        if(!$medicina){
            return redirect()->route('medicinas.index')->with('error','Medicina no encontrada.');
        }
        $medicina->delete();
        return redirect()->route('medicinas.index')->with('success','Medicina eliminada exitosamente.');
    }

    function update(Request $request, $id) {
        $medicina = Medicinas::find($id);
        if (!$medicina) {
            return redirect()->route('medicinas.index')->with('error', 'Medicina no encontrada.');
        }

        $medicina->id = $request->input('id');
        $medicina->nombre = $request->input('nombre');
        $medicina->precio = $request->input('precio');
        $medicina->indicacion = $request->input('indicacion');
        $medicina->dosis = $request->input('dosis');
        $medicina->save();

        return redirect()->route('medicinas.index')->with('success', 'Medicina actualizada exitosamente.');
    }
}
