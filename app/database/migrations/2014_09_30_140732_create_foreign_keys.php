<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('enderecos', function(Blueprint $table) {
			$table->foreign('cliente_id')->references('id')->on('clientes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('enderecos', function(Blueprint $table) {
			$table->foreign('financeira_id')->references('id')->on('financeiras')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('contatos', function(Blueprint $table) {
			$table->foreign('financeira_id')->references('id')->on('financeiras')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('contatos', function(Blueprint $table) {
			$table->foreign('cliente_id')->references('id')->on('clientes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('duplicatas', function(Blueprint $table) {
			$table->foreign('cliente_id')->references('id')->on('clientes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('duplicatas', function(Blueprint $table) {
			$table->foreign('financeira_id')->references('id')->on('financeiras')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('historicoDuplicatas', function(Blueprint $table) {
			$table->foreign('duplicata_id')->references('id')->on('duplicatas')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('enderecos', function(Blueprint $table) {
			$table->dropForeign('enderecos_cliente_id_foreign');
		});
		Schema::table('enderecos', function(Blueprint $table) {
			$table->dropForeign('enderecos_financeira_id_foreign');
		});
		Schema::table('contatos', function(Blueprint $table) {
			$table->dropForeign('contatos_financeira_id_foreign');
		});
		Schema::table('contatos', function(Blueprint $table) {
			$table->dropForeign('contatos_cliente_id_foreign');
		});
		Schema::table('duplicatas', function(Blueprint $table) {
			$table->dropForeign('duplicatas_cliente_id_foreign');
		});
		Schema::table('duplicatas', function(Blueprint $table) {
			$table->dropForeign('duplicatas_financeira_id_foreign');
		});
		Schema::table('historicoDuplicatas', function(Blueprint $table) {
			$table->dropForeign('historicoDuplicatas_duplicata_id_foreign');
		});
	}
}