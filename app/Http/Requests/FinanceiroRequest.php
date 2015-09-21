<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FinanceiroRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
		    'periodo'                => 'required'
		  ];
	}

    
    public function messages()
	{
		return [

		    'periodo.required'        => 'Perido é obrigatorio'
	}

}
