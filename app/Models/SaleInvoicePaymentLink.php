<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoicePaymentLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_invoice_id',
        'sale_payment_id',
        'amount_applied',
    ];

    protected $casts = [
        'amount_applied' => 'decimal:2',
    ];

    public function invoice()
    {
        return $this->belongsTo(SaleInvoice::class, 'sale_invoice_id');
    }

    public function payment()
    {
        return $this->belongsTo(SalePayment::class, 'sale_payment_id');
    }
}
