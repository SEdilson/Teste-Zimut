<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->uuid('uuid')->unique();
            $table->string('Nome', 60);
            $table->date('DataNascimento');
            $table->string('CPF')->unique();
            $table->integer('CEP');
            $table->string('Endereco');
            $table->integer('Numero')->nullable($value = true);
            $table->string('Bairro', 100);
            $table->string('Cidade');
            $table->string('Estado');
            $table->string('Complemento')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
