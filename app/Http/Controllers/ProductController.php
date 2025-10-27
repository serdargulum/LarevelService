<?php

namespace App\Http\Controllers;

use App\Services\IProductService;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function __construct(public IProductService $productService)
    {

    }

    public function index(): JsonResponse
    {
        return response()->json($this->productService->getAll());
    }

}
