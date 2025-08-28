<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use Illuminate\Support\Facades\Route;

//CRUD - ambiente
Route::get('/ambiente/create', AmbienteCreate::class);
Route::get('/ambiente/list', AmbienteList::class);
Route::get('/ambiente/edit/{id}', AmbienteEdit::class);
