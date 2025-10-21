<?php

namespace App\Http\Controllers;

use App\Http\Requests\DispositivoRequest;
use App\Models\Sensor;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class DispositivoController extends Controller
{
    use WithPagination;
    public $search = "";
    public $perPage = "10";

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '40']

    ];
    public function store(DispositivoRequest $request)
    {
        $sensor = Sensor::where('codigo', $request->sensor_id)->first();
        if (!$sensor) {
            return response()->json(['error' => 'sensor não encontrado'], 404);
        }

        $dispositivo = Sensor::where('tipo', 'like', "%{$this->search}%")
            ->orWhere('codigo', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return response()->json([
            'success' => 'dispositivo salvo com sucesso',
            'data' => $dispositivo
        ], 201);
    }

    public function alternarStatus($id)
    {
        $dispositivo = Sensor::find($id);
        if ($dispositivo) {
            $dispositivo->status = $dispositivo->status ? 0 : 1;
            $dispositivo->save();

            return response()->json([
                'message' => 'Status atualizado com sucesso',
                'data' => $dispositivo
            ]);
        }
    }
}
