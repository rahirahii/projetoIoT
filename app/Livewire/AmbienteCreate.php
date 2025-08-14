<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function store()
    {
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        // session()->flash('success', 'Cadastro realizado com sucesso');
    }


    public function render()
    {
        return view('livewire.ambiente-create');
    }
}
