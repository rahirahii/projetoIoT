<?php

use App\Livewire\AmbienteCreate;
use Illuminate\Support\Facades\Route;

//CRUD - ambiente
Route::get('/ambiente/create', AmbienteCreate::class);
