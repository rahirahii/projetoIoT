<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use Illuminate\Support\Facades\Route;

//CRUD - ambiente
Route::get('/ambiente/create', AmbienteCreate::class);
Route::get('/ambiente/list', AmbienteList::class);
Route::get('/ambiente/edit/{id}', AmbienteEdit::class);

use App\Livewire\Dashboard;

use App\Livewire\SensorCreate;
use App\Livewire\SensorEdit;
use App\Livewire\SensorList;

use App\Livewire\RegistroList;

use Illuminate\Support\Facades\Route;


Route::get('/', Dashboard::class);


//CRUD-sensores
Route::get('/sensor/create', SensorCreate::class);
Route::get('/sensor/list', SensorList::class);
Route::get('/sensor/{id}/edit/', SensorEdit::class);

//LIST (Registros)
Route::get('/registro/list', RegistroList::class);

