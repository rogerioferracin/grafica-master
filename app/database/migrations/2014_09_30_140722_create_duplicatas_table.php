<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDuplicatasTable extends Migration {

	public function up()
	{
		Schema::create('duplicatas', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('numeroFatura', 10);
			$table->string('numeroOrdem', 10);
			$table->string('condicoesEspeciais', 120);
			$table->string('observacoes', 255);
			$table->string('taxaJuros', 3);
			$table->string('porcentagemDesconto', 3);
			$table->string('valorBrutoExtenso', 255);
			$table->datetime('dataEmissao');
			$table->timestamp('dataPagamento');
			$table->timestamp('dataFinalDesconto');
			$table->timestamp('dataVencimento');
			$table->decimal('valorBruto', 9,2);
			$table->decimal('valorJuros', 9,2);
			$table->decimal('valorLiquido', 9,2);
			$table->decimal('valorPagoComJuros', 9,2);
			$table->enum('status', array('ABERTO', 'BAIXADO', 'PRORROGADO', 'BAIXADO', 'PAGO'));
			$table->integer('cliente_id')->unsigned();
			$table->integer('financeira_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('duplicatas');
	}
}