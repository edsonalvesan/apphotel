<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome',100);
			$table->string('rg',50);
			$table->string('cpf',50);
			$table->string('telefone_principal',50);
			$table->string('telefone_secundario',50);
			$table->string('celular',50);
			$table->date('nacimento');
			$table->string('contato',100);
			$table->string('telefone_contato',50);
			$table->string('celular_contato',50);
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
		Schema::drop('usuarios');
	}

}
