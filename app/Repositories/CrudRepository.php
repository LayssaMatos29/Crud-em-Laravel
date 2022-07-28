<?php

namespace App\Repositories;

abstract class CrudRepository
{
    public function buscarPorId(int $id)
    {
        return $this->entity->find($id);
    }

    public function criar(array $data)
    {

    }

    public function deletarPorId(int $id)
    {

    }

    public function editarPorId(array $data, int $id)
    {

    }

    public function buscarTodos()
    {
        return $this->entity->all();
    }
}
