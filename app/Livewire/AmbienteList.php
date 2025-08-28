<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
{
    use WithPagination;

    public $search="";
    public $perPage="";


    public function render()
    {
        return view('livewire.ambiente-list');
    }
}
