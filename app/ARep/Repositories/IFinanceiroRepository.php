<?php namespace App\ARep\Repositories;

Interface IFinanceiroRepository
{
public function index($search, $data_ini, $data_fim, $status);
public function pagamento($id);
public function store($input);
public function show($id);
public function update($input, $id);
public function destroy($id);
}