<?php

namespace App\Http\Controllers\Api;

use App\Models\SaleInvoice;

/**
 * @OA\Tag(
 *     name="SaleInvoice",
 *     description="Sale invoice management"
 * )
 */
class SaleInvoiceController extends BaseApiController
{
    protected string $modelClass = SaleInvoice::class;

    /**
     * @OA\Get(
     *     path="/sale-invoices",
     *     tags={"SaleInvoice"},
     *     summary="List all sale invoices",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/sale-invoices/{id}",
     *     tags={"SaleInvoice"},
     *     summary="Get a single sale invoice",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Sale invoice not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/sale-invoices",
     *     tags={"SaleInvoice"},
     *     summary="Create a new sale invoice",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Sale invoice created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/sale-invoices/{id}",
     *     tags={"SaleInvoice"},
     *     summary="Update a sale invoice",
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
     *     @OA\Response(response=200, description="Sale invoice updated"),
     *     @OA\Response(response=404, description="Sale invoice not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sale-invoices/{id}",
     *     tags={"SaleInvoice"},
     *     summary="Delete a sale invoice",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Sale invoice deleted"),
     *     @OA\Response(response=404, description="Sale invoice not found")
     * )
     */
}
