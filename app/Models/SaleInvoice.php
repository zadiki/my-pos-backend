<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
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

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function paymentLinks()
    {
        return $this->hasMany(SaleInvoicePaymentLink::class, 'sale_invoice_id');
    }

    public function payments()
    {
        return $this->hasManyThrough(SalePayment::class, SaleInvoicePaymentLink::class, 'sale_invoice_id', 'id', 'id', 'sale_payment_id');
    }
}
