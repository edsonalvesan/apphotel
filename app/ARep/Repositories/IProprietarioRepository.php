<?php namespace App\ARep\Repositories;

Interface IProprietarioRepository
{

public function index($search,$tipo);
public function store($input,$tipo);
public function show($id);
public function update($input, $id);
public function destroy($id);
public function ProprietariosForSelect();

}