<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Company, Shop, User, Supplier, Product, Purchase, PurchaseInvoice, PurchasePayment, PurchaseInvoicePaymentLink, Sale, SaleInvoice, SalePayment, SaleInvoicePaymentLink};

class InvoicePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Ensure at least one user exists (companies require a user)
        $admin = User::first() ?? User::factory()->create([
            'name' => 'Seed Admin',
            'email' => 'seed-admin@example.com',
        ]);

        // Create company and shops
        $company = Company::create([
            'name' => $faker->company,
            'email' => $faker->companyEmail,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'user_id' => $admin->id,
        ]);

        $shops = collect();
        for ($s = 0; $s < 2; $s++) {
            $shops->push(Shop::create([
                'name' => $faker->company . ' Shop',
                'email' => $faker->companyEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'postal_code' => $faker->postcode,
                'country' => $faker->country,
                'company_id' => $company->id,
            ]));
        }

        // Create users
        $users = User::factory()->count(5)->create();

        // Create suppliers
        $suppliers = [];
        for ($i = 0; $i < 3; $i++) {
            $suppliers[] = Supplier::create([
                'name' => $faker->company,
                'email' => $faker->companyEmail,
                'phone' => $faker->phoneNumber,
                'contact_person' => $faker->name,
                'address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'postal_code' => $faker->postcode,
                'country' => $faker->country,
                'tax_id' => strtoupper($faker->bothify('TAX###')),
                'status' => 'active',
            ]);
        }

        // Create products
        $products = [];
        foreach ($shops as $shop) {
            for ($i = 0; $i < 3; $i++) {
                $products[] = Product::create([
                    'sku' => strtoupper($faker->bothify('SKU###')),
                    'name' => $faker->word . ' ' . $faker->word,
                    'description' => $faker->sentence,
                    'price' => $faker->randomFloat(2, 5, 200),
                    'cost' => $faker->randomFloat(2, 1, 100),
                    'shop_id' => $shop->id,
                ]);
            }
        }

        // Create purchases and related invoices/payments
        for ($i = 0; $i < 5; $i++) {
            $shop = $shops->random();
            $supplier = $suppliers[array_rand($suppliers)];
            $user = $users->random();

            $subtotal = $faker->randomFloat(2, 50, 1000);
            $tax = $faker->randomFloat(2, 0, 100);
            $discount = $faker->randomFloat(2, 0, 50);
            $total = max(0, $subtotal + $tax - $discount);

            $purchase = Purchase::create([
                'po_number' => strtoupper($faker->unique()->bothify('PO-#####')),
                'shop_id' => $shop->id,
                'supplier_id' => $supplier->id,
                'user_id' => $user->id,
                'subtotal' => $subtotal,
                'tax' => $tax,
                'discount' => $discount,
                'total' => $total,
                'status' => 'pending',
                'notes' => $faker->sentence,
                'purchase_date' => now(),
            ]);

            // Purchase invoice
            $invoice = PurchaseInvoice::create([
                'purchase_id' => $purchase->id,
                'invoice_number' => strtoupper($faker->unique()->bothify('PINV-#####')),
                'invoice_date' => now(),
                'subtotal' => $subtotal,
                'tax' => $tax,
                'discount' => $discount,
                'total' => $total,
                'status' => 'unpaid',
            ]);

            // Create 1 or 2 payments
            $remaining = $total;
            $paymentsCount = $faker->numberBetween(1, 2);
            for ($p = 0; $p < $paymentsCount; $p++) {
                $amount = ($p === $paymentsCount - 1) ? $remaining : round($faker->randomFloat(2, 1, $remaining - 1), 2);
                $remaining = round($remaining - $amount, 2);

                $payment = PurchasePayment::create([
                    'purchase_id' => $purchase->id,
                    'purchase_invoice_id' => $invoice->id,
                    'user_id' => $user->id,
                    'payment_date' => now(),
                    'amount' => $amount,
                    'method' => $faker->randomElement(['cash', 'bank_transfer', 'card']),
                    'reference' => $faker->bothify('REF-#####'),
                    'notes' => $faker->sentence,
                ]);

                PurchaseInvoicePaymentLink::create([
                    'purchase_invoice_id' => $invoice->id,
                    'purchase_payment_id' => $payment->id,
                    'amount_applied' => $amount,
                ]);
            }
        }

        // Create sales and related invoices/payments
        for ($i = 0; $i < 5; $i++) {
            $shop = $shops->random();
            $user = $users->random();

            $subtotal = $faker->randomFloat(2, 20, 500);
            $tax = $faker->randomFloat(2, 0, 50);
            $discount = $faker->randomFloat(2, 0, 20);
            $total = max(0, $subtotal + $tax - $discount);

            $sale = Sale::create([
                'invoice_number' => strtoupper($faker->unique()->bothify('SINV-#####')),
                'shop_id' => $shop->id,
                'user_id' => $user->id,
                'subtotal' => $subtotal,
                'tax' => $tax,
                'discount' => $discount,
                'total' => $total,
                'payment_method' => $faker->randomElement(['cash', 'card', 'online']),
                'status' => 'completed',
                'notes' => $faker->sentence,
                'sale_date' => now(),
            ]);

            $invoice = SaleInvoice::create([
                'sale_id' => $sale->id,
                'invoice_number' => strtoupper($faker->unique()->bothify('SINV-INV-#####')),
                'invoice_date' => now(),
                'subtotal' => $subtotal,
                'tax' => $tax,
                'discount' => $discount,
                'total' => $total,
                'status' => 'unpaid',
            ]);

            $remaining = $total;
            $paymentsCount = $faker->numberBetween(1, 2);
            for ($p = 0; $p < $paymentsCount; $p++) {
                $amount = ($p === $paymentsCount - 1) ? $remaining : round($faker->randomFloat(2, 1, $remaining - 1), 2);
                $remaining = round($remaining - $amount, 2);

                $payment = SalePayment::create([
                    'sale_id' => $sale->id,
                    'sale_invoice_id' => $invoice->id,
                    'user_id' => $user->id,
                    'payment_date' => now(),
                    'amount' => $amount,
                    'method' => $faker->randomElement(['cash', 'card', 'online']),
                    'reference' => $faker->bothify('REF-#####'),
                    'notes' => $faker->sentence,
                ]);

                SaleInvoicePaymentLink::create([
                    'sale_invoice_id' => $invoice->id,
                    'sale_payment_id' => $payment->id,
                    'amount_applied' => $amount,
                ]);
            }
        }
    }
}
