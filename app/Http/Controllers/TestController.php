<?php

namespace App\Http\Controllers;

use App\Services\ITestService;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function __construct(public ITestService $testService)
    {

    }

    public function void(): JsonResponse
    {
        return response()->json([]);
    }

    public function calculation(): JsonResponse
    {
        return response()->json([
            'total' => $this->testService->heavyCalculation(1000000)
        ]);
    }

}