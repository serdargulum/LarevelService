<?php

namespace App\Http\Controllers;

use App\Services\IProductService;
use App\Services\ITestService;

class TestController extends Controller
{
    public function __construct(public ITestService $testService)
    {

    }

    public function void()
    {
        return [];
    }

    public function calculation()
    {
        return ['total' => $this->testService->heavyCalculation(1000000)];
    }

}