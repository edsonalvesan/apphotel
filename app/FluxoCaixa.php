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


	public function getVencimentoAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}

	public function getDataPagamentoAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}

	public function getValorAttribute($value)
	{
		return number_format($value,2,',','.'); 
	}


	public function setVencimentoAttribute($value)
	{
       $this->attributes['vencimento'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}

	public function setDataPagamentoAttribute($value)
	{
       $this->attributes['data_pagamento'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}

	public function locatario()
	{
		return $this->belongsTo('App\Usuario', 'usuario_id'); 
	} 

	public function proprietario()
	{
		return $this->belongsTo('App\Proprietario', 'proprietario_id'); 
	}

	public function contrato()
	{
		return $this->belongsTo('App\Contrato', 'contrato_id'); 
	} 		


}
