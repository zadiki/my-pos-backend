<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
