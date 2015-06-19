<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contratos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('proprietario_id')->unsigned();
			$table->integer('usuario_id')->unsigned();
			$table->integer('prazo_contrato');
			$table->date('data_inicio');
			$table->date('data_fim');
			$table->integer('qtd_parcelas_servico');
            $table->date('vencimento_p_parcela');
            $table->float('valor_contrato');
            $table->float('valor_pago_servico');
            $table->float('valor_caucao');
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
		Schema::drop('contratos');
	}

}
