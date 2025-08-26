<?php

namespace App\Livewire;

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
        'descricao' => 'required|min:6|max:20'
    ];

    protected $messages = [
        'codigo.required' => 'o código é obrigatório',
        'codigo.unique' => 'o campo codigo é unico',
        'tipo.required' => 'o campo tipo é obrigatório',
        'tipo.max' => 'o número máximo de caracteres é 10',
        'tipo.min' => 'o número minimo de caracteres é 3',
        'descricao.required' => 'a descrição é obrigatória',
        'descricao.min' => 'o numero minímo de caracteres é 6',
        'descricao.max' => 'o numero máximo de caracteres é 20'
    ];

    public function store()
    {
        $this->validate();
        $ambiente = Ambiente::create([
            'ambiente_id' => $this->ambiente_id
        ]);

        Sensor::create([
            'codigo' => $this->nome,
            'tipo' => $this->tipo,
            'descricao' => $this->tipo,
            'status' => $this->status,
            'ambiente_id' => $ambiente->id
        ]);

        session()->flash('success  ', 'Cadastro de Sensor realizado com sucesso');
        return redirect()->route('sensor.list');
    }

    public function render()
    {
        return view('livewire.sensor-create');
    }
}
