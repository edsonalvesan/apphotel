<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContratoRequest;
use App\ARep\Repositories\IContratoRepository as ContratoRepository;
use App\ARep\Repositories\IUsuarioRepository as UsuarioRepository;
use App\ARep\Repositories\IProprietarioRepository as ProprietarioRepository;

class ContratoController extends Controller {
	
	protected $contratorepository;
	protected $usuarioRepository;
	protected $proprietarioRepository;

	public function __construct(ContratoRepository $contratorepository, UsuarioRepository $usuarioRepository, 
		                        ProprietarioRepository $proprietarioRepository)
	{
		$this->middleware('auth');
		$this->contratorepository = $contratorepository;
		$this->usuarioRepository = $usuarioRepository;
		$this->proprietarioRepository = $proprietarioRepository;
	}

	public function index()
	{
		 $contratos = $this->contratorepository->index();
         
         return view('contratos.index',['contratos'=>$contratos]);
	}


	public function create()
	{
		
        $usuariosForSelect = $this->usuarioRepository->UsuariosForSelect();
        $proprietariosForSelect = $this->proprietarioRepository->ProprietariosForSelect();
		
		//dd($usuariosForSelect);
		return view('contratos.create')->with(compact('usuariosForSelect','proprietariosForSelect'));
	
	}


	public function store(ContratoRequest $request)
	{
		
		$result = $this->contratorepository->store($request->all());

        return $this->retornoOperacao($result,'salvar'); 
	}

	public function edit($id)
	{
		
        $usuariosForSelect = $this->usuarioRepository->UsuariosForSelect();
        $proprietariosForSelect = $this->proprietarioRepository->ProprietariosForSelect();

		$contrato = $this->contratorepository->show($id);
        
        return view('contratos.edit')->with(compact('contrato','usuariosForSelect','proprietariosForSelect'));
	}

	public function update(ContratoRequest $request, $id)
	{
		
		$result = $this->contratorepository->update($request->all(),$id);

        return $this->retornoOperacao($result,'salvar');
	}

	public function destroy($id)
	{
		
		$result = $this->contratorepository->destroy($id);

        return $this->retornoOperacao($result,'remover');
	}

	protected function retornoOperacao($retorno,$tipo)
	{
	    if(!$retorno)
        {
            if($tipo == 'salvar')
	         {
	           return redirect()->back()->withInput()->withErrors(['Falha ao salvar Contrato']);

	         }
               return redirect()->back()->withInput()->withErrors(['Falha ao remover Contrato']);

        }

            if($tipo == 'salvar')
	         {
	           return redirect()->route('contratos')->with('success', 'Contrato salvo com sucesso!');	

	         }
               return redirect()->route('contratos')->with('success', 'Contrato removido com sucesso!');	
	}

}
