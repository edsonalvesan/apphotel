<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FluxoCaixa extends Model {

	protected $fillable = 
 [
			'contrato_id',
			'vencimento',
			'valor',
			'data_pagamento',
			'desconto',
			'juros',
			'valor_pagamento'
];			


}
