<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     schema="Purchase",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="po_number", type="string", example="PO001"),
 *     @OA\Property(property="shop_id", type="integer", example=1),
 *     @OA\Property(property="supplier_id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="subtotal", type="number", format="float", example=100.00),
 *     @OA\Property(property="tax", type="number", format="float", example=10.00),
 *     @OA\Property(property="discount", type="number", format="float", example=5.00),
 *     @OA\Property(property="total", type="number", format="float", example=105.00),
 *     @OA\Property(property="status", type="string"),
 *     @OA\Property(property="notes", type="string"),
 *     @OA\Property(property="purchase_date", type="string"),
 *     @OA\Property(property="expected_delivery_date", type="string"),
 * )
 */
class Purchase extends Model
{
    protected $fillable = [
        'po_number',
        'shop_id',
        'supplier_id',
        'user_id',
        'subtotal',
        'tax',
        'discount',
        'total',
        'status',
        'notes',
        'purchase_date',
        'expected_delivery_date',
        'actual_delivery_date',
    ];

    protected $casts = [
        'purchase_date' => 'datetime',
        'expected_delivery_date' => 'datetime',
        'actual_delivery_date' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'discount' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(PurchaseDetail::class);
    }
}
