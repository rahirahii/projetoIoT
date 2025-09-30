<?php

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

