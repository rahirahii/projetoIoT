<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR'); //criar dados falsos

        for ($i = 1; $i <= 10; $i++) {
            Ambiente::create([
                'nome' => 'Ambiente' . $i, //nome fixo e a variavel para gerar um ambiente diferente
                'descricao' => $faker->sentence(), //descrição fake para o ambiente
                'status' => $faker->boolean(80), //tem 80% de chance de criar um status verdadeiro
            ]);
        }
    }
}
