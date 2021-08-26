<?php


namespace App\Services;


interface BaseServiceInterface
{
    public function all();

    public function show($id);

    public function delete($id);

    public function store($data);

    public function update($data, $id);
}
