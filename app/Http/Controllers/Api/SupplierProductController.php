<?php

namespace App\Http\Controllers\Api;

use App\Models\SupplierProduct;

/**
 * @OA\Tag(
 *     name="SupplierProduct",
 *     description="Supplier product management"
 * )
 */
class SupplierProductController extends BaseApiController
{
    protected string $modelClass = SupplierProduct::class;

    /**
     * @OA\Get(
     *     path="/supplier-products",
     *     tags={"SupplierProduct"},
     *     summary="List all supplier products",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/supplier-products/{id}",
     *     tags={"SupplierProduct"},
     *     summary="Get a single supplier product",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Supplier product not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/supplier-products",
     *     tags={"SupplierProduct"},
     *     summary="Create a new supplier product",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Supplier product created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/supplier-products/{id}",
     *     tags={"SupplierProduct"},
     *     summary="Update a supplier product",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Supplier product updated"),
     *     @OA\Response(response=404, description="Supplier product not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/supplier-products/{id}",
     *     tags={"SupplierProduct"},
     *     summary="Delete a supplier product",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Supplier product deleted"),
     *     @OA\Response(response=404, description="Supplier product not found")
     * )
     */
}
