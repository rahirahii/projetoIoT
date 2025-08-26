<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{
    use WithPagination;
    public $search = "";
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => '15']

    ];
    public function render()
    {
        $sensores = Sensor::where('tipo', 'like', "%{$this->search}%")
            ->orWhere('codigo', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        $sensores = Sensor::where('codigo', 'like', "%{$this->search}%");
        return view('livewire.sensor-list', compact('sensores'));
    }
}
