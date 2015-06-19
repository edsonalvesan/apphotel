<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model {

 //use SoftDeletes;

 //protected $dates = ['deleted_at'];

 protected $fillable = 
 [
	'proprietario_id',
	'usuario_id',
	'imovel_id',
	'prazo_contrato',
	'data_inicio',
	'data_fim',
	'qtd_parcelas_servico',
    'vencimento_p_parcela',
    'valor_contrato',
    'valor_pago_servico', 
    'valor_caucao',
    'cep',
	'endereco',
	'numero',
	'bairro',
	'cidade',
	'estado'
 ]; 

	public function getDataInicioAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}

	public function getDataFimAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}

	public function getVencimentoPParcelaAttribute($value)
	{
		return date('d/m/Y', strtotime($value)); 
	}
	 
	public function getValorContratoAttribute($value)
	{
		return number_format($value,2,',','.'); 
	}

	public function setDataInicioAttribute($value)
	{
       $this->attributes['data_inicio'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}

	public function setDataFimAttribute($value)
	{
      $this->attributes['data_fim'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	}
 	public function setVencimentoPParcelaAttribute($value)
	{
	    
	    $this->attributes['vencimento_p_parcela'] = date('Y-m-d', strtotime(str_replace('/', '-', $value)));
	} 

	public function locatario()
	{
		return $this->belongsTo('App\Usuario', 'usuario_id'); 
	} 

	public function proprietario()
	{
		return $this->belongsTo('App\Proprietario', 'proprietario_id'); 
	}

	public function files()
	{
		return $this->hasMany('App\File');
	}


}
