<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'cpf' => '123.432.432-44',
            'nome' => 'Helena Karol Pinheiro Maia',
            'email' => 'helenamaia@hotmail.com',
            'endereco' => 'rua deodoro da fonseca nº987',
            'sexo' => 'Feminino',
            'estado' => 'Paraná',
            'cidade' => 'Pontal do Paraná',
            'data_nascimento' => '09_03_2004'
        ]);

    }
}
