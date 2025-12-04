<?php

namespace App\Livewire\Ambiente;

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

        return view('livewire.ambiente.ambiente-list', compact('ambientes'));
    }

    public function delete($id)
    {
        $ambientes = Ambiente::find($id);
        if (isset($ambientes->sensor->ambiente_id)) {
            session()->flash('message', 'O ambiente não pode ser deletado');
        } else {
            $ambientes->delete();
        }
    }
}
