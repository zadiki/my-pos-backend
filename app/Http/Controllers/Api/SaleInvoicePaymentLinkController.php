<?php

namespace App\Http\Controllers\Api;

use App\Models\SaleInvoicePaymentLink;

/**
 * @OA\Tag(
 *     name="SaleInvoicePaymentLink",
 *     description="Sale invoice payment link management"
 * )
 *
 * @OA\Get(
 *     path="/sale-invoice-payment-links",
 *     tags={"SaleInvoicePaymentLink"},
 *     summary="List all sale invoice payment links",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/sale-invoice-payment-links/{id}",
 *     tags={"SaleInvoicePaymentLink"},
 *     summary="Get a single sale invoice payment link",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Sale invoice payment link not found")
 * )
 *
 * @OA\Post(
 *     path="/sale-invoice-payment-links",
 *     tags={"SaleInvoicePaymentLink"},
 *     summary="Create a new sale invoice payment link",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Sale invoice payment link created")
 * )
 *
 * @OA\Put(
 *     path="/sale-invoice-payment-links/{id}",
 *     tags={"SaleInvoicePaymentLink"},
 *     summary="Update a sale invoice payment link",
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
 *     @OA\Response(response=200, description="Sale invoice payment link updated"),
 *     @OA\Response(response=404, description="Sale invoice payment link not found")
 * )
 *
 * @OA\Delete(
 *     path="/sale-invoice-payment-links/{id}",
 *     tags={"SaleInvoicePaymentLink"},
 *     summary="Delete a sale invoice payment link",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Sale invoice payment link deleted"),
 *     @OA\Response(response=404, description="Sale invoice payment link not found")
 * )
 */
class SaleInvoicePaymentLinkController extends BaseApiController
{
    protected string $modelClass = SaleInvoicePaymentLink::class;
}
