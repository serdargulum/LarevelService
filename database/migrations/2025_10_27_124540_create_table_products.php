<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {

            $table->bigIncrements('Id');

            $table->unsignedBigInteger('BrandId')->nullable()->index();
            $table->unsignedBigInteger('ProductCategoryId')->nullable()->index();
            $table->unsignedBigInteger('TaxId')->nullable()->index();
            $table->integer('StockType');
            $table->unsignedSmallInteger('Stock');
            $table->longText('CurrencyCode');
            $table->decimal('Price', 18, 2);
            $table->boolean('IsPrepackedItem');
            $table->boolean('IsActive');
            $table->decimal('PackagingPrice', 18, 2);
            $table->unsignedSmallInteger('Calories')->nullable();
            $table->longText('SKU')->nullable();
            $table->dateTime('DeletedAt', 6)->nullable();

            $table->dateTime('CreatedAt', 6)->nullable();
            $table->dateTime('UpdatedAt', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_products');
    }
};
