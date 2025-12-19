<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(
 *     schema="InventoryChangeTransaction",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="inventory_id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="type", type="string", example="in"),
 *     @OA\Property(property="quantity_change", type="integer", example=5),
 *     @OA\Property(property="quantity_before", type="integer", example=10),
 *     @OA\Property(property="quantity_after", type="integer", example=15),
 *     @OA\Property(property="reference_type", type="string"),
 *     @OA\Property(property="reference_id", type="integer"),
 *     @OA\Property(property="notes", type="string"),
 * )
 */
class InventoryChangeTransaction extends Model
{
    protected $fillable = [
        'inventory_id',
        'user_id',
        'type',
        'quantity_change',
        'quantity_before',
        'quantity_after',
        'reference_type',
        'reference_id',
        'notes',
    ];

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
