<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Registro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AmbienteSeeder::class,
        ]);

        $this->call([
            SensorSeeder::class
        ]);

        $this->call([
            RegistroSeeder::class
        ]);
    }
}
