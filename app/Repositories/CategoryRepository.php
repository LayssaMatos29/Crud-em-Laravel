<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository extends CrudRepository implements CategoryRepositoryInterface
{
    protected $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }
}


