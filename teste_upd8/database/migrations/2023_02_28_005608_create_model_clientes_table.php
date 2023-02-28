<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('email');
            $table->string('endereco');
            $table->string('sexo');
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
