<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tarea;

class TareasController extends Controller
{
    public function store(Request $request){
        //validar que los datos lleguen por POST
        
        $request->validate(['titulo'=>'required|min:5']);
        $tarea = new tarea();
        $tarea->titulo = $request->titulo;

        $tarea->save();
        return redirect()->route('actividades')->with('success','Actividad creada correctamente');

    }
}
