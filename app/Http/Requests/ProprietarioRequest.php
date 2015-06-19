<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProprietarioRequest extends Request {


	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
		    'nome' => 'required|min:5',
             'rg'=> 'required',
             'cpf'=> 'required',
             'telefone_principal'=>'required'
		];
	}


	public function messages()
	{
		return [
		    'nome.required' => 'Nome Obrigatorio',
		    'nome.min'=> 'O nome deve conter pelo menos 5 caracteres',
		    'rg.required'=>'CPF Obrigatorio',
		    'cpf.required'=>'CPF Obrigatorio',
		    'telefone_principal.required'=>'Telefone Obrigatorio'
		];
	}

}
