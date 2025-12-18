<?php

namespace App\Http\Controllers\Api;

use App\Models\SaleDetail;

/**
 * @OA\Tag(
 *     name="SaleDetail",
 *     description="Sale detail management"
 * )
 */
class SaleDetailController extends BaseApiController
{
    protected string $modelClass = SaleDetail::class;

    /**
     * @OA\Get(
     *     path="/sale-details",
     *     tags={"SaleDetail"},
     *     summary="List all sale details",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/sale-details/{id}",
     *     tags={"SaleDetail"},
     *     summary="Get a single sale detail",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Sale detail not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/sale-details",
     *     tags={"SaleDetail"},
     *     summary="Create a new sale detail",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Sale detail created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/sale-details/{id}",
     *     tags={"SaleDetail"},
     *     summary="Update a sale detail",
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
     *     @OA\Response(response=200, description="Sale detail updated"),
     *     @OA\Response(response=404, description="Sale detail not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sale-details/{id}",
     *     tags={"SaleDetail"},
     *     summary="Delete a sale detail",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Sale detail deleted"),
     *     @OA\Response(response=404, description="Sale detail not found")
     * )
     */
}
