<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\ARep\Repositories\IUsuarioRepository as Repository;
use \Response as Response;

class UsuarioController extends Controller {

	protected $repository;


	public function __construct(Repository $repository)
	{
		$this->middleware('auth');
		$this->repository = $repository;
	}


	public function index()
	{
		 
		$search = \Request::get('search');

        $usuarios = $this->repository->index($search);
         

        return view('usuarios.index')->with(compact('usuarios','search'));
	}

	public function create()
	{
	  
	  return view('usuarios.create');
	}

	public function store(UsuarioRequest $request)
	{
		
		$result = $this->rspository->store($request->all());        
        
        return $this->retornoOperacao($result,'salvar');
        

	}


	public function edit($id)
	{         
        $usuario =$this->repository->show($id);
         
        return view('usuarios.edit',compact('usuario'));
	}

	
	public function update(UsuarioRequest $request, $id)
	{       
      
      $result = $this->repository->update($request->all(),$id);
      
      return $this->retornoOperacao($result,'salvar');

	}

	public function view($id)
	{     
            $usuario =$this->repository->show($id);
            return view('usuarios.view',compact('usuario'));
	}

	public function destroy($id)
	{
        
        $result = $this->repository->destroy($id);

        $result= $this->retornoOperacao($result,'remover'); 

	}

	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Usuário']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Usuário']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('usuarios')->with('success', 'Usuário salvo com sucesso!');	

	         }
               return redirect()->route('usuarios')->with('success', 'Usuário removido com sucesso!');	
	}


	
	public function usuariosForSelect()
	{
		
		return Response::json($this->usuariosForSelect1(), 200);
	}



	
public function usuariosForSelect1()
   {
    
  //  $usuarios = [];

  //  $collection = Usuario::all();

  //  $i = 0;

  //  foreach ($collection as $value) {
  //    $usuarios[$i]['id'] = $value->id;
  //    $usuarios[$i]['nome'] = $value->nome;
   //   $i++;
  //  }

  //  return $usuarios;


        $users = Usuario::all();
        $result = array();

        foreach ($users as $key => $value) {
            $result[$value->id] = $value->name;
        }

        return $result;
  }

	
}
