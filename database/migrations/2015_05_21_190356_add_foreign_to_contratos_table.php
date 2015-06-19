<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contratos', function(Blueprint $table)
		{
			$table->foreign('proprietario_id')->references('id')->on('proprietarios');
			$table->foreign('usuario_id')->references('id')->on('usuarios');
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
