<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function create(){
        return view('equipo.create');
    }
    
    public function store(Request $request){
        $equi = new Equipo();
    
        $equi->nombre = $request->nombre;
        $equi->ciudad = $request->ciudad;
        $equi->estadio = $request->estadio;
        $equi->aforo = $request->aforo;
        $equi->año = $request->año;
    
        $equi->save();
    
        return redirect()->route('equipo.show', $equi->id);
    }
    
    public function index(){
        $equi = Equipo::orderBy('id', 'desc')->get();
        return view('equipo.listar', compact('equi'));
    }
    
    public function destroy(Equipo $equipo){
        $equipo->delete();
        return redirect()->route('equipo.index');
    }
    
    public function edit(Equipo $equipo){
        return view('equipo.edit', compact('equipo'));
    }
    
    public function update(Request $request, Equipo $equipo){
        $equipo->nombre = $request->nombre;
        $equipo->ciudad = $request->ciudad;
        $equipo->estadio = $request->estadio;
        $equipo->aforo = $request->aforo;
        $equipo->año = $request->año;
        $equipo->save();
    
        return redirect()->route('equipo.index');
    }
    
    public function show($id){
        $equi = Equipo::findOrFail($id);
        return view('equipo.show', compact('equi'));
    }
}
