<?php namespace App\ARep\Repositories;

Interface IContratoRepository
{
public function index();
public function store($input);
public function show($id);
public function update($input, $id);
public function destroy($id);
}