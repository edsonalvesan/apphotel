<?php namespace App\ARep\Repositories;

use App\FluxoCaixa as FluxoCaixa;

class FinanceiroRepository implements IFinanceiroRepository
{


public function index($search, $data_ini, $data_fim, $status)
{
   
   if(!is_null($data_ini) && !empty($data_ini))
        {
          
           $data_ini = $this->convertDataVencimento($data_ini);
           $data_fim = $this->convertDataVencimento($data_fim);

           $financeiro = FluxoCaixa::whereBetween('vencimento',[$data_ini, $data_fim])->orderBy('vencimento')->paginate(12);
    

        } else {
            
            $financeiro = FluxoCaixa::orderBy('vencimento')->paginate(20);

        }//with('contrato','contrato.locatario','contrato.proprietario')->

       
   return $financeiro;
}

public function pagamento($id)
  {
    //
  }

public function store($input)
{
    
    $financeiro = new FluxoCaixa();
    
    $financeiro->fill($input);

    $result = $financeiro->save();

    return $result;

}

public function show($id)
{
    
    $financeiro = FluxoCaixa::find($id);

    return $financeiro;
}

public function update($input, $id)
{
	
	$financeiro = $this->show($id);

    $financeiro->fill($input);
    
    $result = $financeiro->save();

   return $result;

}

public function destroy($id)
{

	$financeiro = $this->show($id);

    $result = $financeiro->delete();

    return $result;

}

public function convertDataVencimento($value)
{
      
      return date('Y-m-d', strtotime(str_replace('/', '-', $value)));

}

}