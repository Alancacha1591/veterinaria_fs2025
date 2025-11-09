<?php

namespace App\Http\Controllers;

use App\Models\Veterinarios;
use Illuminate\Http\Request;

class VeterinariosController extends Controller
{
    //

    function index() {
        $veterinarios=Veterinarios::all();
        return view('veterinarios.index',['veterinarios'=>$veterinarios]);
    }

    function show($id) {
        $veterinario=Veterinarios::find($id);
        return view('veterinarios.show',['veterinario'=>$veterinario]);
    }

    public function create() {
        return view('veterinarios.create');
    }

    public function edit($id) {
        $veterinario=Veterinarios::find($id);
        if (!$veterinario) {
            return redirect()->route('veterinarios.index')->with('error', 'Veterinario no encontrado.');
        }
        return view('veterinarios.edit', ['veterinario' => $veterinario]);
    }

    public function store(Request $request) {
        //condicional para evitar IDs duplicados
        if (Veterinarios::where('id', $request->input('id'))->exists()) {
            return redirect()->back()->with('error', 'Ya existe un veterinario con ese ID.');
        }

        $veterinario = new Veterinarios();
        $veterinario->id = $request->input('id');
        $veterinario->nombre = $request->input('nombre');
        $veterinario->apellidos = $request->input('apellidos'); 
        $veterinario->edad = $request->input('edad');
        $veterinario->especialidad = $request->input('especialidad');
        $veterinario->telefono = $request->input('telefono');
        $veterinario->save();

        return redirect()->route('veterinarios.index')->with('success', 'Veterinario creado exitosamente.');
    }

    public function destroy($id){
        $veterinarios=Veterinarios::find($id);
        if(!$veterinarios){
            return redirect()->route('veterinarios.index')->with('error','Veterinario no encontrado.');
        }
        $veterinarios->delete();
        return redirect()->route('veterinarios.index')->with('success','Veterinario eliminado exitosamente.');
    }

    function update(Request $request, $id) {
        $veterinario = Veterinarios::find($id);
        if (!$veterinario) {
            return redirect()->route('veterinarios.index')->with('error', 'Veterinario no encontrado.');
        }

        $veterinario->id = $request->input('id');
        $veterinario->nombre = $request->input('nombre');
        $veterinario->apellidos = $request->input('apellidos'); 
        $veterinario->edad = $request->input('edad');
        $veterinario->especialidad = $request->input('especialidad');
        $veterinario->telefono = $request->input('telefono');
        $veterinario->save();

        return redirect()->route('veterinarios.index')->with('success', 'Veterinario actualizado exitosamente.');
    }
}
