<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
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
        $ambientes = Ambiente::where('nome', 'like', "%{$this->search}%")
            ->orWhere('descricao', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.ambiente-list', compact('ambientes'));
    }
}
