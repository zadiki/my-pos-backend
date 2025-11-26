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
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->onDelete('cascade');
            $table->string('invoice_number')->unique();
            $table->timestamp('invoice_date');
            $table->decimal('subtotal',12,2);
            $table->decimal('tax',12,2)->default(0);
            $table->decimal('discount',12,2)->default(0);
            $table->decimal('total',12,2);
            $table->enum('status', ['unpaid','partial','paid','cancelled'])->default('unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_invoices');
    }
};
