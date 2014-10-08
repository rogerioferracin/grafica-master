<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoDuplicatasTable extends Migration {

	public function up()
	{
		Schema::create('historicoDuplicatas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titulo', 45);
			$table->string('descricao', 255);
			$table->timestamp('dataOcorrencia');
			$table->integer('duplicata_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('historicoDuplicatas');
	}
}