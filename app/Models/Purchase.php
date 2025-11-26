<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
