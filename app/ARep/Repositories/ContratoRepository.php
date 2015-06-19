<?php namespace App\ARep\Repositories;

use App\Contrato as Contrato;

class ContratoRepository implements IContratoRepository
{

public function index()
{
 
   $contratos = Contrato::with('locatario','proprietario')->orderBy('id')->paginate(5);	
 
 return $contratos;

}

public function store($input)
{
    $contrato = new Contrato();
    
    $contrato->fill($input);
    
    $result = $contrato->save();

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
