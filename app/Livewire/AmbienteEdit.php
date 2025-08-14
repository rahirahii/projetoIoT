<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function update()
    {
      Ambiente::update([
        'nome'=>$this->nome,
        'descricao'=>$this->descricao,
        'status'=>$this->status
      ]);

    }

    public function render()
    {
        return view('livewire.ambiente-edit');
    }
}
