<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Registro;
use App\Models\Sensor;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /*public function store(Request $request){
        $registros=Registro::create([
            "sensor_id" => $request->sensor_id,
            "valor"=>$request->valor,
            "unidade"=>$request->unidade,
            "data_hora"=>$request->data_hora
        ]);
        return $registros;
    }*/

    public function store(RegistroRequest $request)
    {
        $sensor = Sensor::where('codigo', $request->cod_sensor)->first();
        if (!$sensor) {
            return response()->json(['error' => 'sensor não encontrado'], 404);
        }

        $registro = Registro::create([
            'sensor_id' => $sensor->id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => now()
        ]);

        return response()->json([
            'success' => 'registro salvo com sucesso',
            'data' => $registro
        ], 201);
    }
}
