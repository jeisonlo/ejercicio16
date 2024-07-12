<?php

namespace App\Http\Controllers;
use App\Models\jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{

    public function create(){
        return view('jugador.create');
    }
    
    public function store(Request $request){
       
        $jug = new Jugador();
        
        $jug->nombre = $request->nombre;
        $jug->fechanacimiento = $request->fechanacimiento;
        $jug->posicion = $request->posicion;
        
        $jug->save();
    
        return redirect()->route('jugador.show', $jug->id);
    }
    
    public function index(){
        $jug = Jugador::orderBy('id', 'desc')->get();
        return view('jugador.listar', compact('jug'));
    }
     
    public function destroy(Jugador $jugador){
        $jugador->delete();
        return redirect()->route('jugador.index');
    }   
    
    public function edit(Jugador $jugador){
        return view('jugador.edit', compact('jugador'));
    }
    
    public function update(Request $request, Jugador $jugador){
        $jugador->nombre = $request->nombre;
        $jugador->fechanacimiento = $request->fechanacimiento;
        $jugador->posicion = $request->posicion;
        $jugador->save();
     
        return redirect()->route('jugador.index');
    }
    
    public function show($id){
        $jug = Jugador::findOrFail($id);
        return view('jugador.show', compact('jug'));
    }
}


