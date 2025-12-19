<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *     schema="Supplier",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="email", type="string"),
 *     @OA\Property(property="phone", type="string"),
 *     @OA\Property(property="contact_person", type="string"),
 *     @OA\Property(property="address", type="string"),
 *     @OA\Property(property="city", type="string"),
 *     @OA\Property(property="state", type="string"),
 *     @OA\Property(property="postal_code", type="string"),
 *     @OA\Property(property="country", type="string"),
 * )
 */
class Supplier extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'contact_person',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'tax_id',
        'status',
        'notes',
    ];

    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(SupplierProduct::class);
    }
}
