<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'sale_invoice_id',
        'user_id',
        'payment_date',
        'amount',
        'method',
        'reference',
        'notes',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
        'amount' => 'decimal:2',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function invoice()
    {
        return $this->belongsTo(SaleInvoice::class, 'sale_invoice_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoiceLinks()
    {
        return $this->hasMany(SaleInvoicePaymentLink::class, 'sale_payment_id');
    }
}
