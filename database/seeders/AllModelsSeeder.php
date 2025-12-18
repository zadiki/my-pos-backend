<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Permission, User, UserPermission, Inventory, InventoryChangeTransaction, Product, Shop};

class AllModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reuse the invoice/payment seeder to create purchases/sales/products/shops/users
        $this->call(InvoicePaymentSeeder::class);

        $faker = \Faker\Factory::create();

        // Create some permissions
        $perms = ['view_sales','edit_sales','view_purchases','edit_purchases','manage_inventory','manage_users'];
        foreach ($perms as $p) {
            Permission::firstOrCreate(['name' => $p], ['description' => ucfirst(str_replace('_',' ', $p))]);
        }

        // Ensure some user_permissions exist
        $users = User::all();
        $permissions = Permission::all();
        foreach ($users->take(5) as $user) {
            foreach ($permissions->random(min(3, $permissions->count())) as $perm) {
                UserPermission::firstOrCreate(['user_id' => $user->id, 'permission_id' => $perm->id]);
            }
        }

        // Create inventories for products in shops
        $products = Product::all();
        $shops = Shop::all();
        foreach ($products as $product) {
            $shop = $shops->random();
            $inventory = Inventory::firstOrCreate([
                'product_id' => $product->id,
                'shop_id' => $shop->id,
            ],[
                'quantity' => $faker->numberBetween(0, 200),
                'reorder_level' => $faker->numberBetween(5, 20),
                'last_restocked_at' => now()->subDays($faker->numberBetween(1,30)),
            ]);

            // add a sample inventory change transaction
            InventoryChangeTransaction::firstOrCreate([
                'inventory_id' => $inventory->id,
                'user_id' => $users->random()->id,
                'type' => 'stock_count',
                'quantity_change' => 0,
                'quantity_before' => $inventory->quantity,
                'quantity_after' => $inventory->quantity,
            ],[
                'reference_type' => null,
                'reference_id' => null,
                'notes' => 'Initial stock after seeding',
            ]);
        }
    }
}
