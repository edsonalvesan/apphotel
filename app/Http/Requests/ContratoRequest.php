<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContratoRequest extends Request {


	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
		    'proprietario_id'        => 'required',
            'usuario_id'             => 'required',
			'prazo_contrato'         => 'required',
			'data_inicio'            => 'required',
			'data_fim'               => 'required',
			'qtd_parcelas_servico'   => 'required',
            'vencimento_p_parcela'   => 'required',
            'valor_contrato'         => 'required',
            'valor_pago_servico'     => 'required',
            'valor_caucao'           => 'required',
            'cep'                    => 'required',
			'endereco'               => 'required',
			'numero'                 => 'required',
			'bairro'                 => 'required',
			'cidade'                 => 'required',
			'estado'                 => 'required'
		  ];
	}

    
    public function messages()
	{
		return [

		    'proprietario_id.required'        => 'Proprietário obrigatorio',
            'usuario_id.required'             => 'Usuário obrigatorio',
			'prazo_contrato.required'         => 'O Prazo de contrato é obrigatorio',
			'data_inicio.required'            => 'A data de início é obrigatorio',
			'data_fim.required'               => 'A data final é obrigatorio',
			'qtd_parcelas_servico.required'   => 'A quantidade de parcelas é obrigatorio',
            'vencimento_p_parcela.required'   => 'O vencimento é obrigatorio',
            'valor_contrato.required'         => 'O valor de contrato é obrigatorio',
            'valor_pago_servico.required'     => 'O valor custeado pelo serviço é obrigatorio',
            'valor_caucao.required'           => 'O valor do caução é obrigatorio, se não foi pago caução preencher com 0,00',
            'cep.required'                    => 'Cep obrigatorio',
			'endereco.required'               => 'Endereço obrigatorio',
			'numero.required'                 => 'Numero obrigatorio',
			'bairro.required'                 => 'Bairro obrigatorio',
			'cidade.required'                 => 'Cidade obrigatorio',
			'estado.required'                 => 'Estado obrigatorio'
		];
	}

}
