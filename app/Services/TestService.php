<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class TestService implements ITestService
{
    public function __construct()
    {

    }

    public function heavyCalculation(int $count): int
    {
        $sum = 0;
        for ($i = 1; $i <= $count; $i++) {
            $sum += $i;
            $sum -= intdiv($i, 2);
            $sum *= 1;
        }
        return $sum;
    }
}