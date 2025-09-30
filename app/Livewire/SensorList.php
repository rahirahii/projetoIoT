<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{
    use WithPagination;
    public $search = "";
    public $perPage = "10";

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '40']

    ];
    public function render()
    {
        $sensores = Sensor::where('tipo', 'like', "%{$this->search}%")
            ->orWhere('codigo', 'like', "%{$this->search}%")
            ->paginate($this->perPage);
            
        return view('livewire.sensor-list', compact('sensores'));
    }
}
