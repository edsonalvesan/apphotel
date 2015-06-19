<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proprietario extends Model {

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
	'celular_contato',
	'endereco',
	'numero',
	'bairro',
	'cidade',
	'estado',
	'cep',
	'agencia',
	'conta',
	'tipo'
	];

	public function getNomeAttribute($value)
	{
		return strtoupper($value); 
	}

	public function getContatoAttribute($value)
	{
		return strtoupper($value); 
	}
}
