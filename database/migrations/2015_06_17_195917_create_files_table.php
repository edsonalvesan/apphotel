<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {


	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->integer('contrato_id')->unsigned();
			$table->foreign('contrato_id')->references('id')->on('contratos');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('files');
	}

}
