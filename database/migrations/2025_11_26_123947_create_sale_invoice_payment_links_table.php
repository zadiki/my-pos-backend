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
        Schema::create('sale_invoice_payment_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_invoice_id')->constrained('sale_invoices')->onDelete('cascade');
            $table->foreignId('sale_payment_id')->constrained('sale_payments')->onDelete('cascade');
            $table->decimal('amount_applied',12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_invoice_payment_links');
    }
};
