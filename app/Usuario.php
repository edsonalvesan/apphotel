<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model {

	use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = 
	['nome',
	'rg',
	'cpf',
	'telefone_principal',
	'telefone_secundario',
	'celular',
	'nacimento',
	'contato',
	'telefone_contato',
	'celular_contato'
	];


	public function getNomeAttribute($value)
	{
		return strtoupper($value); 
	}

	public function getContatoAttribute($value)
	{
		return strtoupper($value); 
	}

	public function contratos()
	{
		return $this->hasMany('App\Usuario','usuario_id'); 
	}


}
