<?php

use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use Illuminate\Support\Facades\Route;


Route::get('/', Dashboard::class);

//CRUD-sensores
Route::get('/sensor/create', SensorCreate::class);