<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\ProprietarioRequest;
use App\ARep\Repositories\IProprietarioRepository as Repository;

class ProprietarioController extends Controller {

	protected $repository;

	public function __construct(Repository $repository)
	{
		$this->middleware('auth');
		$this->repository = $repository;
	}

	public function index()
	{
		 
        $search = \Request::get('search');

        $proprietarios = $this->repository->index($search,0);

        return view('proprietarios.index')->with(compact('proprietarios','search'));
	
	}

	public function create()
	{
		
		return view('proprietarios.create');
	
	}

	public function store(ProprietarioRequest $request)
	{    
        $result = $this->repository->store($request->all(),0);

        return $this->retornoOperacao($result,'salvar'); 

	}


	public function edit($id)
	{	    
  
        $proprietario = $this->repository->show($id);
        
        return view('proprietarios.edit',compact('proprietario'));

	}


	public function update(ProprietarioRequest $request, $id)
	{	
       
        $result = $this->repository->update($request->all(),$id);

        return $this->retornoOperacao($result,'salvar');

	}

	public function destroy($id)
	{
        
        $result = $this->repository->destroy($id);

        return $this->retornoOperacao($result,'remover');
        
	}


	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Proprietário']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Proprietário']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('proprietarios')->with('success', 'Proprietário salvo com sucesso!');	

	         }
               return redirect()->route('proprietarios')->with('success', 'Proprietário removido com sucesso!');	
	}

}
