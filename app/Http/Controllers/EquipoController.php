<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Estadio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipoController extends Controller
{

    public function index() {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }
   
    public function show($id) {
    $equipo = Equipo::find($id);
    $estadio = $equipo->estadio->nombre;
    return view('equipos.show', compact('equipo', 'estadio'));
}
   
    public function create() {
        $estadios = Estadio::all();
        return view('equipos.create', compact('estadios'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nombre' => 'required|unique:equipos',
            'titulos' => 'integer|min:0',
            'estadio_id' => 'required|exists:estadios,id',
            'escudo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validación del fichero
        ]);
    
        if ($request->hasFile('escudo')) {
            $path = $request->file('escudo')->store('escudos', 'public'); // Guardar en directorio 'escudos' en disco 'public'
            $validated['escudo'] = $path;
        }
    
        Equipo::create($validated);
        return redirect()->route('equipos.index')->with('mensaje', 'Equipo creado correctamente!');
    }
   
    public function edit($id) {
        $equipo = Equipo::find($id);
        $estadios = Estadio::all();
        return view('equipos.edit', compact('equipo', 'estadios'));
    }
  
    public function update(Request $request, $id){
        $validated = $request->validate([
            'nombre' => 'required|unique:equipos,nombre,'.$id,
            'titulos' => 'integer|min:0',
            'estadio_id' => 'required|exists:estadios,id',
        ]);
        $equipo = Equipo::findOrFail($id);
        $equipo->update($validated);
        return redirect()->route('equipos.index')->with('mensaje', 'Equipo actualizado correctamente!');
    }
  
    public function destroy($id) {
        $equipo = Equipo::find($id);
        if ($equipo->escudo) {
            Storage::disk('public')->delete($equipo->escudo);
        }
        $equipo->delete();
        return redirect()->route('equipos.index')->with('mensaje', 'Equipo eliminado correctamente!');
    }
}
