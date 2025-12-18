<?php

namespace App\Http\Controllers\Api;

use App\Models\Purchase;

/**
 * @OA\Tag(
 *     name="Purchase",
 *     description="Purchase management"
 * )
 */
class PurchaseController extends BaseApiController
{
    protected string $modelClass = Purchase::class;

    /**
     * @OA\Get(
     *     path="/purchases",
     *     tags={"Purchase"},
     *     summary="List all purchases",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/purchases/{id}",
     *     tags={"Purchase"},
     *     summary="Get a single purchase",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Purchase not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/purchases",
     *     tags={"Purchase"},
     *     summary="Create a new purchase",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Purchase created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/purchases/{id}",
     *     tags={"Purchase"},
     *     summary="Update a purchase",
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
     *     @OA\Response(response=200, description="Purchase updated"),
     *     @OA\Response(response=404, description="Purchase not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/purchases/{id}",
     *     tags={"Purchase"},
     *     summary="Delete a purchase",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Purchase deleted"),
     *     @OA\Response(response=404, description="Purchase not found")
     * )
     */
}
