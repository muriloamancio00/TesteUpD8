<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClienteModel;
use Faker\Factory;

class ClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ClienteModel $cliente): void
    {
        
        $faker = Factory::create('pt_BR');

        for ($i = 0; $i < 20; $i++) {
            ClienteModel::create([
                'nome' => $faker->name,
                'cpf' => $faker->cpf,
                'email' => $faker->safeEmail,
                'endereco' => $faker->streetName,
                'data_nascimento' => $faker->date('Y-m-d', $max = 'now'),
                'estado' => $faker->stateAbbr,
                'cidade' => $faker->city,
                'sexo' => $faker->randomElement(['Masculino', 'Feminino']),
            ]);
        }
    }
}
