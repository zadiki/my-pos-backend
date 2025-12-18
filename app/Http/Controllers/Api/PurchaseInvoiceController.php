<?php

namespace App\Http\Controllers\Api;

use App\Models\PurchaseInvoice;

/**
 * @OA\Tag(
 *     name="PurchaseInvoice",
 *     description="Purchase invoice management"
 * )
 */
class PurchaseInvoiceController extends BaseApiController
{
    protected string $modelClass = PurchaseInvoice::class;

    /**
     * @OA\Get(
     *     path="/purchase-invoices",
     *     tags={"PurchaseInvoice"},
     *     summary="List all purchase invoices",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/purchase-invoices/{id}",
     *     tags={"PurchaseInvoice"},
     *     summary="Get a single purchase invoice",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Purchase invoice not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/purchase-invoices",
     *     tags={"PurchaseInvoice"},
     *     summary="Create a new purchase invoice",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Purchase invoice created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/purchase-invoices/{id}",
     *     tags={"PurchaseInvoice"},
     *     summary="Update a purchase invoice",
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
     *     @OA\Response(response=200, description="Purchase invoice updated"),
     *     @OA\Response(response=404, description="Purchase invoice not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/purchase-invoices/{id}",
     *     tags={"PurchaseInvoice"},
     *     summary="Delete a purchase invoice",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Purchase invoice deleted"),
     *     @OA\Response(response=404, description="Purchase invoice not found")
     * )
     */
}
