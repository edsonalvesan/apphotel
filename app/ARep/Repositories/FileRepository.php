<?php namespace App\ARep\Repositories;

use App\File as File;

class FileRepository implements IFileRepository
{

public function index($id)
{

 $contrato = \App\Contrato::with('files')->find($id);

 return $contrato;

}

public function show($id)
{

  $file = File::find($id);

  return $file;	
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
		$file = $this->show($fileId);

		$storagePath = storage_path().'/documentos/'.$id;

		return \Response::download($storagePath.'/'.$file->name);

}

public function destroy($id, $fileId)
{

		$file = $this->show($fileId);

		$storagePath = storage_path().'/documentos/'.$id;

		$file->delete();

		unlink($storagePath.'/'.$file->name);

		return redirect()->back()->with('success', 'Arquivo removido com sucesso!');

}

}	