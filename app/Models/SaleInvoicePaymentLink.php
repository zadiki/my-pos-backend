<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="SaleInvoicePaymentLink",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="sale_invoice_id", type="integer", example=1),
 *     @OA\Property(property="sale_payment_id", type="integer", example=1),
 *     @OA\Property(property="amount_applied", type="number", format="float", example=50.00),
 * )
 */
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
