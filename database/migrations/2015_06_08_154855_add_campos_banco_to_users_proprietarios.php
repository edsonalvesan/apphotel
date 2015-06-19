<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposBancoToUsersProprietarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('proprietarios', function(Blueprint $table)
		{
			$table->string('agencia',20);
			$table->string('conta',20);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('proprietarios', function(Blueprint $table)
		{
			//
		});
	}

}
