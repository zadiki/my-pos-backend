<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="SaleInvoice",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="sale_id", type="integer", example=1),
 *     @OA\Property(property="invoice_number", type="string", example="INV001"),
 *     @OA\Property(property="invoice_date", type="string", format="date-time"),
 *     @OA\Property(property="subtotal", type="number", format="float", example=100.00),
 *     @OA\Property(property="tax", type="number", format="float", example=10.00),
 *     @OA\Property(property="discount", type="number", format="float", example=5.00),
 *     @OA\Property(property="total", type="number", format="float", example=105.00),
 *     @OA\Property(property="status", type="string"),
 * )
 */
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
