<?php

namespace App\Livewire;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
  public $id;
  public $nome;
  public $descricao;
  public $status;

  public function mount($id)
  {
    $ambientes = Ambiente::findOrFail($id);
    $this->nome = $ambientes->nome;
    $this->descricao = $ambientes->descricao;
    $this->status = $ambientes->status;
  }

  public function update()
  {
    $this->validate([
      'nome' => 'required|max:80',
      'descricao' => 'required|min:6|max:80',
      'status' => 'required',
    ]);
    $ambientes = Ambiente::find($this->id);
    $ambientes->update([
      'nome' => $this->nome,
      'descricao' => $this->descricao,
      'status' => $this->status
    ]);

    session()->flash('success', 'Ambiente atualizado com sucesso');
  }

  public function render()
  {
    return view('livewire.ambiente-edit');
  }
}
