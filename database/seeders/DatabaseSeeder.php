<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Registro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
            //RegistroSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Teste 1',
            'email' => 'teste1@example.com',
            'password' => Hash::make('123456')
        ]);
        User::factory()->create([
            'name' => 'Teste 2',
            'email' => 'teste2@example.com',
            'password' => Hash::make('123456')
        ]);
        User::factory()->create([
            'name' => 'Teste 3',
            'email' => 'teste3@example.com',
            'password' => Hash::make('123456')
        ]);
    }
}
