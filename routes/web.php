<?php

use App\Livewire\AmbienteCreate;
use App\Livewire\AmbienteEdit;
use App\Livewire\AmbienteList;
use Illuminate\Support\Facades\Route;

//CRUD - ambiente
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

use App\Livewire\Dashboard;

use App\Livewire\SensorCreate;
use App\Livewire\SensorEdit;
use App\Livewire\SensorList;

use App\Livewire\RegistroList;

Route::get('/', Dashboard::class);


//CRUD-sensores
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/{id}/edit/', SensorEdit::class)->name('sensor.edit');

//LIST (Registros)
Route::get('/registro/list', RegistroList::class);
