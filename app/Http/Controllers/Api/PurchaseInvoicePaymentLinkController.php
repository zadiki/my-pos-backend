<?php

namespace App\Http\Controllers\Api;

use App\Models\PurchaseInvoicePaymentLink;

/**
 * @OA\Tag(
 *     name="PurchaseInvoicePaymentLink",
 *     description="Purchase invoice payment link management"
 * )
 *
 * @OA\Get(
 *     path="/purchase-invoice-payment-links",
 *     tags={"PurchaseInvoicePaymentLink"},
 *     summary="List all purchase invoice payment links",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/purchase-invoice-payment-links/{id}",
 *     tags={"PurchaseInvoicePaymentLink"},
 *     summary="Get a single purchase invoice payment link",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Purchase invoice payment link not found")
 * )
 *
 * @OA\Post(
 *     path="/purchase-invoice-payment-links",
 *     tags={"PurchaseInvoicePaymentLink"},
 *     summary="Create a new purchase invoice payment link",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Purchase invoice payment link created")
 * )
 *
 * @OA\Put(
 *     path="/purchase-invoice-payment-links/{id}",
 *     tags={"PurchaseInvoicePaymentLink"},
 *     summary="Update a purchase invoice payment link",
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
 *     @OA\Response(response=200, description="Purchase invoice payment link updated"),
 *     @OA\Response(response=404, description="Purchase invoice payment link not found")
 * )
 *
 * @OA\Delete(
 *     path="/purchase-invoice-payment-links/{id}",
 *     tags={"PurchaseInvoicePaymentLink"},
 *     summary="Delete a purchase invoice payment link",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Purchase invoice payment link deleted"),
 *     @OA\Response(response=404, description="Purchase invoice payment link not found")
 * )
 */
class PurchaseInvoicePaymentLinkController extends BaseApiController
{
    protected string $modelClass = PurchaseInvoicePaymentLink::class;
}
