<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinanceirasTable extends Migration {

	public function up()
	{
		Schema::create('financeiras', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nomeFantasia', 90);
			$table->string('razaoSocial', 120);
			$table->string('cnpj', 90);
			$table->string('ie', 45);
			$table->string('taxaJuros', 4);
		});
	}

	public function down()
	{
		Schema::drop('financeiras');
	}
}