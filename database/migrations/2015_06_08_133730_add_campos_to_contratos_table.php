<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposToContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contratos', function(Blueprint $table)
		{
			$table->string('cep',20);
			$table->string('endereco',100);
			$table->string('numero',20);
			$table->string('bairro',50);
			$table->string('cidade',50);
			$table->string('estado',50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contratos', function(Blueprint $table)
		{
			//
		});
	}

}
