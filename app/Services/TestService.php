<?php

namespace App\Services;

class TestService implements ITestService
{
    public function heavyCalculation(int $count): int
    {
        $sum = 0;
        for ($i = 1; $i <= $count; $i++) {
            $sum += $i;
            $sum -= intdiv($i, 2);
        }
        return $sum;
    }
}