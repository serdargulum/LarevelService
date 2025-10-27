<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'BrandId' => fake()->numberBetween(1, 10000),
            'ProductCategoryId' => fake()->numberBetween(1, 10000),
            'TaxId' => fake()->numberBetween(1, 10000),
            'StockType' => fake()->numberBetween(1, 5),
            'Stock' => fake()->numberBetween(1, 10000),
            'CurrencyCode' => fake()->currencyCode,
            'Price' => fake()->randomFloat(2, 1, 99999999999999),
            'IsPrepackedItem' => fake()->boolean(),
            'IsActive' => fake()->boolean(70),
            'PackagingPrice' => fake()->randomFloat(2, 1, 99999999999999),
            'Calories' => fake()->numberBetween(100, 500),
            'SKU' => fake()->unique()->bothify('SKU-####??'),
            'DeletedAt' => now(),
        ];
    }

}
