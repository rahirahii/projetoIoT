<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Auth\Login;
use Illuminate\Support\Facades\Route;

use App\Livewire\Dashboard;

use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorList;

use App\Livewire\RegistroList;

//CRUD - ambiente
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->name('ambiente.list');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

//dashboard
Route::get('/', Dashboard::class)->name('dashboard');

//CRUD-sensores
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/{id}/edit/', SensorEdit::class)->name('sensor.edit');

//LIST (Registros)
Route::get('/registro/list', RegistroList::class);

//LOGIN
Route::get('/login', Login::class)->name('login');
