<?php

namespace App\Services;

interface ITestService
{
    public function heavyCalculation(int $count): int;
}