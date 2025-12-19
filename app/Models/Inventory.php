<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(
 *     schema="Inventory",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="product_id", type="integer", example=1),
 *     @OA\Property(property="shop_id", type="integer", example=1),
 *     @OA\Property(property="quantity", type="integer", example=10),
 *     @OA\Property(property="reorder_level", type="integer", example=5),
 *     @OA\Property(property="last_restocked_at", type="string", format="date-time"),
 * )
 */
class Inventory extends Model
{
    protected $fillable = [
        'product_id',
        'shop_id',
        'quantity',
        'reorder_level',
        'last_restocked_at',
    ];

    protected $casts = [
        'last_restocked_at' => 'datetime',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }
}
