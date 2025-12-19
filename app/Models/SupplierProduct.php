<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(
 *     schema="SupplierProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="supplier_id", type="integer", example=1),
 *     @OA\Property(property="product_id", type="integer", example=1),
 *     @OA\Property(property="supplier_sku", type="string"),
 *     @OA\Property(property="unit_price", type="number", format="float", example=10.00),
 *     @OA\Property(property="moq", type="integer"),
 *     @OA\Property(property="lead_time_days", type="integer"),
 *     @OA\Property(property="status", type="string"),
 * )
 */
class SupplierProduct extends Model
{
    protected $fillable = [
        'supplier_id',
        'product_id',
        'supplier_sku',
        'unit_price',
        'moq',
        'lead_time_days',
        'status',
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
