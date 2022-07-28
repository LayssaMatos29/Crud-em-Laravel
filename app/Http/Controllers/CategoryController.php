<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;


class CategoryController extends Controller
{
  private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function show(int $id)
    {
        dd($this->categoryService->buscarPorId($id));
    }

    public function buscaTodos()
    {
        dd($this->categoryService->buscaTodos());
    }
}
