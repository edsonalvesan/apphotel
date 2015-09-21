<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\ARep\Repositories\IFinanceiroRepository as FinanceiroRepository;

class FinanceiroController extends Controller {

	protected $financeiroRepository;

	public function __construct(FinanceiroRepository $financeiroRepository)
	{
		$this->middleware('auth');
		$this->financeiroRepository = $financeiroRepository;
	}


	public function index()
	{
		
        $search = \Request::get('search');

        $periodo = \Request::get('periodo');

        $data_ini = substr($periodo, 0, -13);
        $data_fim = substr($periodo, -10);

        $status = null;

        $financeiros = $this->financeiroRepository->index($search, $data_ini, $data_fim, $status);

        return view('financeiro.index')->with(compact('financeiros','search','periodo'));
	}

	public function pagamento($id)
	{
		return view('financeiro.pagamento');
	}

	public function create()
	{
		//
	}


	public function store()
	{
		//
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		
		return view('financeiro.pagamento');
	}

	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
