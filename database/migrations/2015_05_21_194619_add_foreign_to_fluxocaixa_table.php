<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToFluxocaixaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fluxo_caixas', function(Blueprint $table)
		{
			$table->foreign('contrato_id')->references('id')->on('contratos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fluxo_caixas', function(Blueprint $table)
		{
			//
		});
	}

}
