<?php namespace App\ARep\Repositories;

use App\Proprietario as Proprietario;

class ProprietarioRepository implements IProprietarioRepository
{

public function index($search,$tipo)
{
        if(!is_null($search) && !empty($search))
        {
          
           $proprietarios = Proprietario::where('tipo','=',$tipo)->where('nome','like','%'.$search.'%')->orderBy('nome')->paginate(5);

        } else {
            
            $proprietarios = Proprietario::where('tipo','=',$tipo)->orderBy('nome')->paginate(5);

        }

        return $proprietarios;

}


public function store($input,$tipo)
{
	    
    $proprietario = new Proprietario();
    
    $proprietario->fill($input);
    
    $proprietario->tipo = $tipo;

    $result = $proprietario->save();

    return $result;

}

public function show($id)
{
    $proprietario = Proprietario::find($id);

    return $proprietario;
}


public function update($input, $id)
{

    $proprietario = $this->show($id);

    $proprietario->fill($input);
    
    $result = $proprietario->save();

   return $result;

}

public function destroy($id)
{
    
    $proprietario = $this->show($id);

    $result = $proprietario->delete();

    return $result;

}

public function ProprietariosForSelect()
{
    
    $proprietarios = Proprietario::all();


    return $proprietarios->lists('nome', 'id');
}

}