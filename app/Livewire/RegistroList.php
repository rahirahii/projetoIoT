<?php

namespace App\Livewire;

use App\Models\Registro;
use Livewire\Component;
use Livewire\WithPagination;

class RegistroList extends Component
{
    use WithPagination;
    public $search = "";
    public $perPage = "5";

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function render()
    {
        $registros = Registro::where("sensor_id", "like", "%{$this->search}%")
        ->orWhere("valor", "like", "%{$this->search}%")
        ->orWhere("unidade", "like", "%{$this->search}%")
        ->orWhere("data_hora","like", "%{$this->search}%")
        ->orderByDesc('sensor_id','valor','unidade', 'data_hora')
        ->paginate($this->perPage);

        return view('livewire.registro-list', compact('registros'));
    }
}
