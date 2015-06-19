<?php namespace App\Http\Controllers;

class FileController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index($id)
	{

		$contrato = \App\Contrato::with('files')->find($id);

		//dd($contrato);

		return view('contratos.files')->with(compact('contrato'));
	}

	public function upload($id)
	{
		
 		/**
		* Request related
		*/
		$file = \Request::file('documento');

		/**
		* Storage related
		*/
		$storagePath = storage_path().'/documentos/'.$id;

		$fileName = $file->getClientOriginalName();

		/**
		* Database related
		*/
		$fileModel = new \App\File();
		$fileModel->name = $fileName;

		$user = \App\Contrato::find($id);
		
		$user->files()->save($fileModel);

		return $file->move($storagePath, $fileName);
	}

	public function download($id, $fileId)
	{
		$file = \App\File::find($fileId);

		$storagePath = storage_path().'/documentos/'.$id;

		return \Response::download($storagePath.'/'.$file->name);
	}

	public function destroy($id, $fileId)
	{
		$file = \App\File::find($fileId);

		$storagePath = storage_path().'/documentos/'.$id;

		$file->delete();

		unlink($storagePath.'/'.$file->name);

		return redirect()->back()->with('success', 'Arquivo removido com sucesso!');
	}



}
