<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::middleware([\App\Http\Middleware\JwtAuth::class])->group(function () {
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::get('me', [\App\Http\Controllers\Api\AuthController::class, 'me']);

    // User routes
    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);

    // Core resources
    Route::apiResource('companies', \App\Http\Controllers\Api\CompanyController::class);
    Route::apiResource('shops', \App\Http\Controllers\Api\ShopController::class);
    Route::apiResource('products', \App\Http\Controllers\Api\ProductController::class);
    Route::apiResource('inventories', \App\Http\Controllers\Api\InventoryController::class);
    Route::apiResource('permissions', \App\Http\Controllers\Api\PermissionController::class);

    // Purchases
    Route::apiResource('purchases', \App\Http\Controllers\Api\PurchaseController::class);
    Route::apiResource('purchase-details', \App\Http\Controllers\Api\PurchaseDetailController::class);
    Route::apiResource('purchase-invoices', \App\Http\Controllers\Api\PurchaseInvoiceController::class);
    Route::apiResource('purchase-payments', \App\Http\Controllers\Api\PurchasePaymentController::class);
    Route::apiResource('purchase-invoice-payment-links', \App\Http\Controllers\Api\PurchaseInvoicePaymentLinkController::class);

    // Sales
    Route::apiResource('sales', \App\Http\Controllers\Api\SaleController::class);
    Route::apiResource('sale-details', \App\Http\Controllers\Api\SaleDetailController::class);
    Route::apiResource('sale-invoices', \App\Http\Controllers\Api\SaleInvoiceController::class);
    Route::apiResource('sale-payments', \App\Http\Controllers\Api\SalePaymentController::class);
    Route::apiResource('sale-invoice-payment-links', \App\Http\Controllers\Api\SaleInvoicePaymentLinkController::class);

    // Suppliers
    Route::apiResource('suppliers', \App\Http\Controllers\Api\SupplierController::class);
    Route::apiResource('supplier-products', \App\Http\Controllers\Api\SupplierProductController::class);

    // Permissions / user permissions
    Route::apiResource('user-permissions', \App\Http\Controllers\Api\UserPermissionController::class);

    // Inventory change transactions
    Route::apiResource('inventory-change-transactions', \App\Http\Controllers\Api\InventoryChangeTransactionController::class);
});

