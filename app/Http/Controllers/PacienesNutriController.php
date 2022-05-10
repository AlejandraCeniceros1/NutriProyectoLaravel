<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienesNutriController extends Controller
{
    public function create() {
        return view('pacientes.create');
    }

    public function store(Request $request){
        $nuevoPaciente = new Paciente();
        $nuevoPaciente-> nombre_paciente = $request->input('nombre_paciente');
        $nuevoPaciente-> edad_paciente = $request->input('edad_paciente');
        $nuevoPaciente-> sexo_paciente = $request->input('sexo_paciente');
        $nuevoPaciente-> peso_paciente = $request->input('peso_paciente');
    
    if ($request ->file('evidence')){

        $path_evidence=
        $request->file('evidence')->store('public/evidences');

        if($path_evidence){
            $nuevoPaciente->evidence =
            $request->file('evidence')-> HashName();
        }
    }

    if ($nuevoPaciente->save()) {
        return redirect()->route('pacientes.create');
    }
    return redirect()->route('pacientes.create');

    }
}

