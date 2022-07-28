<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;
use Exception;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository =  $productRepository;
    }

    public function buscarPorId(int $id)
    {
        $product = $this->productRepository->buscarPorId($id);

        if (! $product) {
            throw new Exception('Produto não encontrado');
        }
        return $product;
    }

}
