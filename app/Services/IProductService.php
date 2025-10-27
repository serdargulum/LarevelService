<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface IProductService
{
    public function getAll(): Collection;
}