<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContatosTable extends Migration {

	public function up()
	{
		Schema::create('contatos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nome', 90);
			$table->string('cargo', 90);
			$table->string('setor', 90);
			$table->string('email', 120);
			$table->string('telefone', 45);
			$table->string('celular', 45);
			$table->string('info_extra', 255);
			$table->integer('financeira_id')->unsigned();
			$table->integer('cliente_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('contatos');
	}
}