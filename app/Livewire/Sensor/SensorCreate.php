<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'codigo' => 'required|unique:sensors,codigo',
        'tipo' => 'required|min:3|max:10',
        'descricao' => 'min:6|max:20'
    ];

    protected $messages = [
        'codigo.required' => 'o código é obrigatório',
        'codigo.unique' => 'o campo codigo é unico',
        'tipo.required' => 'o campo tipo é obrigatório',
        'tipo.max' => 'o número máximo de caracteres é 10',
        'tipo.min' => 'o número minimo de caracteres é 3',
        'descricao.min' => 'o numero minímo de caracteres é 6',
        'descricao.max' => 'o numero máximo de caracteres é 20'
    ];

    public function store()
    {
        if ($this->ambiente_id == null) {
            Session()->flash('error', 'Não foi possivel encontrar o Id');
        }
        $this->validate();

        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Cadastro de Sensor realizado com sucesso');
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire..sensor.sensor-create', compact('ambientes'));
    }
}
