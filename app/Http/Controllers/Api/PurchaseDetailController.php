<?php

namespace App\Http\Controllers\Api;

use App\Models\PurchaseDetail;

/**
 * @OA\Tag(
 *     name="PurchaseDetail",
 *     description="Purchase detail management"
 * )
 *
 * @OA\Get(
 *     path="/purchase-details",
 *     tags={"PurchaseDetail"},
 *     summary="List all purchase details",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/purchase-details/{id}",
 *     tags={"PurchaseDetail"},
 *     summary="Get a single purchase detail",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Purchase detail not found")
 * )
 *
 * @OA\Post(
 *     path="/purchase-details",
 *     tags={"PurchaseDetail"},
 *     summary="Create a new purchase detail",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Purchase detail created")
 * )
 *
 * @OA\Put(
 *     path="/purchase-details/{id}",
 *     tags={"PurchaseDetail"},
 *     summary="Update a purchase detail",
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
 *     @OA\Response(response=200, description="Purchase detail updated"),
 *     @OA\Response(response=404, description="Purchase detail not found")
 * )
 *
 * @OA\Delete(
 *     path="/purchase-details/{id}",
 *     tags={"PurchaseDetail"},
 *     summary="Delete a purchase detail",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Purchase detail deleted"),
 *     @OA\Response(response=404, description="Purchase detail not found")
 * )
 */
class PurchaseDetailController extends BaseApiController
{
    protected string $modelClass = PurchaseDetail::class;
}
