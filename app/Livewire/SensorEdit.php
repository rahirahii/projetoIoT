<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function mount($id)
    {
        $sensores = Sensor::findOrFail($id);
        $this->ambiente_id = $sensores->ambiente->id;
        $this->codigo = $sensores->codigo;
        $this->tipo = $sensores->tipo;
        $this->descricao->$sensores->descricao;
        $this->status->$sensores->status;
    }

    public function update()
    {
        $sensores = Sensor::findOrFail($this->ambiente_id);
        $ambientes = Ambiente::findOrFail($sensores->ambiente_id);

        $sensores->update([
       
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);
        $ambientes->id=$this->id;
        $ambientes->save();
        session()->flash('success', 'Sensor atualizado com sucesso');
    }
    
    public function render()
    {
        return view('livewire.sensor-edit');
    }
}
