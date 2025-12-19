<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     schema="Sale",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="invoice_number", type="string", example="INV001"),
 *     @OA\Property(property="shop_id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="subtotal", type="number", format="float", example=100.00),
 *     @OA\Property(property="tax", type="number", format="float", example=10.00),
 *     @OA\Property(property="discount", type="number", format="float", example=5.00),
 *     @OA\Property(property="total", type="number", format="float", example=105.00),
 *     @OA\Property(property="payment_method", type="string"),
 *     @OA\Property(property="status", type="string"),
 *     @OA\Property(property="notes", type="string"),
 *     @OA\Property(property="sale_date", type="string"),
 * )
 */
class Sale extends Model
{
    protected $fillable = [
        'invoice_number',
        'shop_id',
        'user_id',
        'subtotal',
        'tax',
        'discount',
        'total',
        'payment_method',
        'status',
        'notes',
        'sale_date',
    ];

    protected $casts = [
        'sale_date' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'discount' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(SaleDetail::class);
    }
}
