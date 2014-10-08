<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecosTable extends Migration {

	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('logradouro', 255);
			$table->string('numero', 10);
			$table->string('complemento', 90);
			$table->string('bairro', 90);
			$table->string('cidade', 255);
			$table->string('uf', 4);
			$table->string('cep')->default('20');
			$table->string('Referencia', 255);
			$table->integer('cliente_id')->unsigned();
			$table->integer('financeira_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('enderecos');
	}
}