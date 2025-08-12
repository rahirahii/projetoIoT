<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = [
        'sensor_id',
        'valor',
        'unidade',
        'data_hora'
    ];

    protected $casts = [
        'data_hora' => 'datetime'
    ]; // garantir que o campo data e hora seja dateTime

    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }
}
