<?php namespace App\ARep\Repositories;

use App\Contrato as Contrato;

use \App\ARep\Repositories\IFinanceiroRepository as FinanceiroRepository;

class ContratoRepository implements IContratoRepository
{

    protected $financeiroRepository;

    function __construct(FinanceiroRepository $financeiroRepository)
    {
        $this->financeiroRepository = $financeiroRepository;
    }


public function index()
{
 
$contratos = \DB::table('contratos')
               ->join('usuarios', 'contratos.usuario_id', '=', 'usuarios.id')
                ->join('proprietarios', 'contratos.proprietario_id', '=', 'proprietarios.id')
                ->select('contratos.id', 'data_inicio','data_fim','valor_contrato','usuarios.nome as usu', 'proprietarios.nome as pro')
                ->paginate(15);
 
// dd($contratos);

   //$contratos = Contrato::with('locatario','proprietario')->orderBy('id')->paginate(5);	
 
   

   return $contratos;

}

public function store($input)
{
    $contrato = new Contrato();
    
    $contrato->fill($input);

    $result = $contrato->save();

    if ($result)
    {
     for ($i = 1; $i <=  $contrato->qtd_parcelas_servico; $i++) 
     {  
     
      if ($i == 1)
      {
       $venc = $contrato->vencimento_p_parcela; 
      } else {

       $venc = (new \Carbon\Carbon($venc))->addMonth(1);

      }

      $contrato_id = $contrato->id;
      $vencimento  = $venc;    
      $valor       = $contrato->valor_pago_servico;
      
      $campos = array("contrato_id", "vencimento","valor");

      $input = compact($campos);

      $result = $this->financeiroRepository->store($input);
     
     } 
    }

    return $result;
}

public function show($id)
{
    $contrato = Contrato::find($id);

    return $contrato;
}

public function update($input, $id)
{

	$contrato = $this->show($id);

    $contrato->fill($input);
    
    //$input['data_inicio'] = date('Y-m-d', strtotime(str_replace('/', '-', $input['data_inicio'])));
    

    
    $result = $contrato->save();

   return $result;

}

public function destroy($id)
{

	$contrato = $this->show($id);

    $result = $contrato->delete();

    return $result;

}

}
