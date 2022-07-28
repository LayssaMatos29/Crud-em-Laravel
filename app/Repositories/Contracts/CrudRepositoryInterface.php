<?php

namespace App\Repositories\Contracts;

Interface CrudRepositoryInterface
{
    public function buscarPorId(int $id);

    public function criar(array $data);

    public function deletarPorId(int $id);

    public function editarPorId(array $data, int $id);

    public function buscarTodos();
}
