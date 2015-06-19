<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFluxoCaixasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fluxo_caixas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contrato_id')->unsigned();
			$table->date('vencimento');
			$table->float('valor');
			$table->date('data_pagamento');
			$table->float('desconto');
			$table->float('juros');
			$table->float('valor_pagamento');
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
		Schema::drop('fluxo_caixas');
	}

}
