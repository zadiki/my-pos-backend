<?php

namespace App\Http\Controllers\Api;

use App\Models\Sale;

/**
 * @OA\Tag(
 *     name="Sale",
 *     description="Sale management"
 * )
 */
class SaleController extends BaseApiController
{
    protected string $modelClass = Sale::class;

    /**
     * @OA\Get(
     *     path="/sales",
     *     tags={"Sale"},
     *     summary="List all sales",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/sales/{id}",
     *     tags={"Sale"},
     *     summary="Get a single sale",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Sale not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/sales",
     *     tags={"Sale"},
     *     summary="Create a new sale",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Sale created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/sales/{id}",
     *     tags={"Sale"},
     *     summary="Update a sale",
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
     *     @OA\Response(response=200, description="Sale updated"),
     *     @OA\Response(response=404, description="Sale not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sales/{id}",
     *     tags={"Sale"},
     *     summary="Delete a sale",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Sale deleted"),
     *     @OA\Response(response=404, description="Sale not found")
     * )
     */
}
