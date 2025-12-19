<?php

namespace App\Http\Controllers\Api;

use App\Models\SalePayment;

/**
 * @OA\Tag(
 *     name="SalePayment",
 *     description="Sale payment management"
 * )
 *
 *  @OA\Delete(
 *     path="/sale-payments/{id}",
 *     tags={"SalePayment"},
 *     summary="Delete a sale payment",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Sale payment deleted"),
 *     @OA\Response(response=404, description="Sale payment not found")
 * )
 * @OA\Get(
 *     path="/sale-payments",
 *     tags={"SalePayment"},
 *     summary="List all sale payments",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/sale-payments/{id}",
 *     tags={"SalePayment"},
 *     summary="Get a single sale payment",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Sale payment not found")
 * )
 *
 * @OA\Post(
 *     path="/sale-payments",
 *     tags={"SalePayment"},
 *     summary="Create a new sale payment",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Sale payment created")
 * )
 *
 * @OA\Put(
 *     path="/sale-payments/{id}",
 *     tags={"SalePayment"},
 *     summary="Update a sale payment",
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
 *     @OA\Response(response=200, description="Sale payment updated"),
 *     @OA\Response(response=404, description="Sale payment not found")
 * )
 */
class SalePaymentController extends BaseApiController
{
    protected string $modelClass = SalePayment::class;
}
