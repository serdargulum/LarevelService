<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService implements IProductService
{
    public function getAll(): Collection
    {
        return Product::all();
    }
}