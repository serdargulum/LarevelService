<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id';

    const CREATED_AT = 'CreatedAt';
    const UPDATED_AT = 'UpdatedAt';

    protected $fillable = [
        'BrandId',
        'ProductCategoryId',
        'TaxId',
        'StockType',
        'Stock',
        'CurrencyCode',
        'Price',
        'IsPrepackedItem',
        'IsActive',
        'PackagingPrice',
        'Calories',
        'SKU',
        'DeletedAt',
    ];
}
