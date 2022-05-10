<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienesNutriController extends Controller
{
    public function index() {
        $pacientes = Paciente::select('id', 'nombre_paciente', 'edad_paciente', 'sexo_paciente', 'peso_paciente')
        ->orderBy('id', 'DESC')->limit(20)->get();
        return $pacientes;
    }

    public function show($id){
        $paciente = Variante::select('id', 'description', 'evidence')->where('id', $id)->first();
        return $paciente;
    }
}
