<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\ARep\Repositories\IProprietarioRepository as Repository;

class HotelController extends Controller {

	protected $repository;

	public function __construct(Repository $repository)
	{
		$this->middleware('auth');
		$this->repository = $repository;
	}

	public function index()
	{
		 
        $search = \Request::get('search');

        $proprietarios = $this->repository->index($search,2);

        return view('hotel.index')->with(compact('proprietarios','search'));
	
	}

	public function create()
	{
		
		return view('hotel.create');
	
	}

	public function store(HotelRequest $request)
	{    
        $result = $this->repository->store($request->all(),2);

        return $this->retornoOperacao($result,'salvar'); 

	}


	public function edit($id)
	{	    
  
        $proprietario = $this->repository->show($id);
        
        return view('hotel.edit',compact('proprietario'));

	}


	public function update(HotelRequest $request, $id)
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
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Hotel']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Hotel']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('hotel')->with('success', 'Hotel salvo com sucesso!');	

	         }
               return redirect()->route('hotel')->with('success', 'Hotel removido com sucesso!');	
	}

}
