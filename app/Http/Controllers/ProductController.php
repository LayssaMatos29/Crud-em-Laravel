<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function busca(int $id){
        try{
            return $this->productService->buscarPorId($id);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}
