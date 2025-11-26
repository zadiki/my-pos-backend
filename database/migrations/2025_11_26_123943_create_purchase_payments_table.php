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
        if (!Schema::hasTable('purchase_payments')) {
            Schema::create('purchase_payments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('purchase_id')->constrained('purchases')->onDelete('cascade');
                $table->foreignId('purchase_invoice_id')->nullable()->constrained('purchase_invoices')->onDelete('set null');
                $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
                $table->timestamp('payment_date');
                $table->decimal('amount',12,2);
                $table->string('method')->nullable();
                $table->string('reference')->nullable();
                $table->text('notes')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_payments');
    }
};
