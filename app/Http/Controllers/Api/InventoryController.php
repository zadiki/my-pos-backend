<?php

namespace App\Http\Controllers\Api;

use App\Models\Inventory;

/**
 * @OA\Tag(
 *     name="Inventory",
 *     description="Inventory management"
 * )
 */
class InventoryController extends BaseApiController
{
    protected string $modelClass = Inventory::class;

    /**
     * @OA\Get(
     *     path="/inventories",
     *     tags={"Inventory"},
     *     summary="List all inventories",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/inventories/{id}",
     *     tags={"Inventory"},
     *     summary="Get a single inventory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Inventory not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/inventories",
     *     tags={"Inventory"},
     *     summary="Create a new inventory",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Inventory created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/inventories/{id}",
     *     tags={"Inventory"},
     *     summary="Update an inventory",
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
     *     @OA\Response(response=200, description="Inventory updated"),
     *     @OA\Response(response=404, description="Inventory not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/inventories/{id}",
     *     tags={"Inventory"},
     *     summary="Delete an inventory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Inventory deleted"),
     *     @OA\Response(response=404, description="Inventory not found")
     * )
     */
}
