<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	public function up()
	{
		Schema::create('clientes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('nomeFantasia', 255);
			$table->string('razaoSocial', 255);
			$table->string('cnpj_cpf', 30);
			$table->string('ie_rg', 30);
			$table->string('observacao', 255);
			$table->boolean('ativo')->default(true);
		});
	}

	public function down()
	{
		Schema::drop('clientes');
	}
}