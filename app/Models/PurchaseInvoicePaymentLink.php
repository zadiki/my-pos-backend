<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseInvoicePaymentLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_invoice_id',
        'purchase_payment_id',
        'amount_applied',
    ];

    protected $casts = [
        'amount_applied' => 'decimal:2',
    ];

    public function invoice()
    {
        return $this->belongsTo(PurchaseInvoice::class, 'purchase_invoice_id');
    }

    public function payment()
    {
        return $this->belongsTo(PurchasePayment::class, 'purchase_payment_id');
    }
}
