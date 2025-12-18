<?php

namespace App\Http\Controllers\Api;

use App\Models\PurchasePayment;

/**
 * @OA\Tag(
 *     name="PurchasePayment",
 *     description="Purchase payment management"
 * )
 */
class PurchasePaymentController extends BaseApiController
{
    protected string $modelClass = PurchasePayment::class;

    /**
     * @OA\Get(
     *     path="/purchase-payments",
     *     tags={"PurchasePayment"},
     *     summary="List all purchase payments",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/purchase-payments/{id}",
     *     tags={"PurchasePayment"},
     *     summary="Get a single purchase payment",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Purchase payment not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/purchase-payments",
     *     tags={"PurchasePayment"},
     *     summary="Create a new purchase payment",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Purchase payment created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/purchase-payments/{id}",
     *     tags={"PurchasePayment"},
     *     summary="Update a purchase payment",
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
     *     @OA\Response(response=200, description="Purchase payment updated"),
     *     @OA\Response(response=404, description="Purchase payment not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/purchase-payments/{id}",
     *     tags={"PurchasePayment"},
     *     summary="Delete a purchase payment",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Purchase payment deleted"),
     *     @OA\Response(response=404, description="Purchase payment not found")
     * )
     */
}
