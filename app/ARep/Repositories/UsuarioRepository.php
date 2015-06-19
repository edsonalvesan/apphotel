<?php namespace App\ARep\Repositories;

use App\Usuario as Usuario;

class UsuarioRepository implements IUsuarioRepository
{

public function index($search)
{
        
        if(!is_null($search) && !empty($search))
        {
          
           $usuarios = Usuario::where('nome','like','%'.$search.'%')->orderBy('nome')->paginate(5);

        } else {
            
            $usuarios = Usuario::orderBy('nome')->paginate(5);

        }

        return $usuarios;

}

public function store($input)
{
    
    $usuario = new Usuario();
    
    $usuario->fill($input);
    
    $result = $usuario->save();

    return $result;

}

public function show($id)
{
    
    $usuario = Usuario::find($id);

    return $usuario;

}

public function update($input, $id)
{
    
    $usuario = $this->show($id);

    $usuario->fill($input);
    
    $result = $usuario->save();

   return $result;


}

public function destroy($id)
{

    $usuario = $this->show($id);

    $result = $usuario->delete();

    return $result;

}

public function UsuariosForSelect()
{

    $usuarios = Usuario::all();

    return $usuarios->lists('nome', 'id');

}

}