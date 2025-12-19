<?php

namespace App\Http\Controllers\Api;

use App\Models\Supplier;

/**
 * @OA\Tag(
 *     name="Supplier",
 *     description="Supplier management"
 * )
 */

/**
 * @OA\Get(
 *     path="/suppliers",
 *     tags={"Supplier"},
 *     summary="List all suppliers",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 */

/**
 * @OA\Get(
 *     path="/suppliers/{id}",
 *     tags={"Supplier"},
 *     summary="Get a single supplier",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Supplier not found")
 * )
 */

/**
 * @OA\Post(
 *     path="/suppliers",
 *     tags={"Supplier"},
 *     summary="Create a new supplier",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Supplier created")
 * )
 */

/**
 * @OA\Put(
 *     path="/suppliers/{id}",
 *     tags={"Supplier"},
 *     summary="Update a supplier",
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
 *     @OA\Response(response=200, description="Supplier updated"),
 *     @OA\Response(response=404, description="Supplier not found")
 * )
 */

/**
 * @OA\Delete(
 *     path="/suppliers/{id}",
 *     tags={"Supplier"},
 *     summary="Delete a supplier",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Supplier deleted"),
 *     @OA\Response(response=404, description="Supplier not found")
 * )
 */
class SupplierController extends BaseApiController
{
    protected string $modelClass = Supplier::class;
}
