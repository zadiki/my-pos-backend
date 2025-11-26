<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'invoice_number',
        'invoice_date',
        'subtotal',
        'tax',
        'discount',
        'total',
        'status',
    ];

    protected $casts = [
        'invoice_date' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'discount' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function paymentLinks()
    {
        return $this->hasMany(PurchaseInvoicePaymentLink::class, 'purchase_invoice_id');
    }

    public function payments()
    {
        return $this->hasManyThrough(PurchasePayment::class, PurchaseInvoicePaymentLink::class, 'purchase_invoice_id', 'id', 'id', 'purchase_payment_id');
    }
}
