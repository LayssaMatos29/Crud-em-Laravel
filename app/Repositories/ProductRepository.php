<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends CrudRepository implements ProductRepositoryInterface
{
    protected $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    
}
