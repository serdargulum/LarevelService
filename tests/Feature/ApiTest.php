<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    public function test_products_route_returns_success()
    {
        $response = $this->get('api/products');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['Id', 'BrandId', 'ProductCategoryId']
            ]);
        ;
    }

    public function test_void_route_returns_success(): void
    {
        $response = $this->get('api/test/void');
        $response
            ->assertStatus(200)
            ->assertJson([]);
    }

    public function test_calculation_route_returns_success()
    {
        $response = $this->get('api/test/calculation');
        $response
            ->assertStatus(200)
            ->assertJson(["total" => 250000500000]);
        ;
    }
}
