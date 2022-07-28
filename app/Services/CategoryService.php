<?php

namespace App\Services;

use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository =  $categoryRepository;
    }

    public function buscarPorId(int $id)
    {
        return $this->categoryRepository->buscarPorId($id);
    }

    public function buscaTodos()
    {
        return $this->categoryRepository->buscarTodos();
    }
}
