<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="sku", type="string", example="SKU001"),
 *     @OA\Property(property="name", type="string", example="Product Name"),
 *     @OA\Property(property="description", type="string"),
 *     @OA\Property(property="price", type="number", format="float", example=19.99),
 *     @OA\Property(property="cost", type="number", format="float", example=10.00),
 *     @OA\Property(property="shop_id", type="integer", example=1),
 * )
 */
class Product extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'description',
        'price',
        'cost',
        'shop_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'cost' => 'decimal:2',
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}
