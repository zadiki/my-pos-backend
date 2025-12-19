<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="PurchasePayment",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="purchase_id", type="integer", example=1),
 *     @OA\Property(property="purchase_invoice_id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="payment_date", type="string", format="date-time"),
 *     @OA\Property(property="amount", type="number", format="float", example=50.00),
 *     @OA\Property(property="method", type="string"),
 *     @OA\Property(property="reference", type="string"),
 *     @OA\Property(property="notes", type="string"),
 * )
 */
class PurchasePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'purchase_invoice_id',
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

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    public function invoice()
    {
        return $this->belongsTo(PurchaseInvoice::class, 'purchase_invoice_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoiceLinks()
    {
        return $this->hasMany(PurchaseInvoicePaymentLink::class, 'purchase_payment_id');
    }
}
