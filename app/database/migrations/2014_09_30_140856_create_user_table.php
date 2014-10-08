<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function($table){
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('nomeUsuario', 20)->unique();
            $table->string('password', 80);
            $table->string('email', 90);
            $table->string('telefone', 40);
            $table->string('perfil', 10);
            $table->boolean('ativo');
            $table->timestamps();
        });

        User::create(array(
            'nome' => 'Rogerio Ferracin',
            'nomeUsuario' => 'rogerioferracin',
            'password' => '746663',
            'email' => 'ferracin@ig.com.br',
            'telefone' => '(12) 98854-2458',
            'perfil' => '1',
            'ativo' => true,
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('users');
    }

}
