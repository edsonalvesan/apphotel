<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
	  
	  
      //$dados = ['ola'=>'mundo'];

      //return $dados;
	  return view('dashboard.index');	

	}



}
