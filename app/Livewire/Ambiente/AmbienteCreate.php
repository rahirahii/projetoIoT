<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    protected $rules = [
        'nome' => 'required|max:80',
        'descricao' => 'min:6|max:80',
        'status' => 'required'
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'nome.max' => 'Número de caracteres excedente, o máximo é 80 caracteres',
        'descricao.min' => 'Número de caracteres insuficiente, o minímo é 6 caracteres',
        'descricao.max' => 'Número de caracteres excedente, o máximo é 80 caracteres',
        'status.required' => 'O campo status é obrigatório'
    ];

    public function store()
    {
        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Cadastro realizado com sucesso');
        return redirect()->route('ambiente.list');
    }


    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
