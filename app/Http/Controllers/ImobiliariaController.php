<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\ImobiliariaRequest;
use App\ARep\Repositories\IProprietarioRepository as Repository;

class ImobiliariaController extends Controller {

	protected $repository;

	public function __construct(Repository $repository)
	{
		$this->middleware('auth');
		$this->repository = $repository;
	}

	public function index()
	{
		 
        $search = \Request::get('search');

        $proprietarios = $this->repository->index($search,1);

        return view('imobiliarias.index')->with(compact('proprietarios','search'));
	
	}

	public function create()
	{
		
		return view('imobiliarias.create');
	
	}

	public function store(ImobiliariaRequest $request)
	{    
        $result = $this->repository->store($request->all(),1);

        return $this->retornoOperacao($result,'salvar'); 

	}


	public function edit($id)
	{	    
  
        $proprietario = $this->repository->show($id);
        
        return view('imobiliarias.edit',compact('proprietario'));

	}


	public function update(ImobiliariaRequest $request, $id)
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
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Imobiliária']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Imobiliária']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('imobiliarias')->with('success', 'Imobiliária salva com sucesso!');	

	         }
               return redirect()->route('imobiliarias')->with('success', 'Imobiliária removida com sucesso!');	
	}

}
