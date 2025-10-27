<?php

namespace App\Http\Controllers;

use App\Services\IProductService;

class ProductController extends Controller
{
    public function __construct(public IProductService $productService)
    {

    }

    public function index()
    {
        return $this->productService->getAll();
    }
}
