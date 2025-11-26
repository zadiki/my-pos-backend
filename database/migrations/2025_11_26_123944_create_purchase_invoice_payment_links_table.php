<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('purchase_invoice_payment_links')) {
            Schema::create('purchase_invoice_payment_links', function (Blueprint $table) {
                $table->id();
                $table->foreignId('purchase_invoice_id')->constrained('purchase_invoices')->onDelete('cascade');
                $table->foreignId('purchase_payment_id')->constrained('purchase_payments')->onDelete('cascade');
                $table->decimal('amount_applied',12,2);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_invoice_payment_links');
    }
};
