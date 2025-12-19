<?php

namespace App\Http\Controllers\Api;

use App\Models\Shop;

/**
 * @OA\Tag(
 *     name="Shop",
 *     description="Shop management"
 * )
 *
 * @OA\Get(
 *     path="/shops",
 *     tags={"Shop"},
 *     summary="List all shops",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/shops/{id}",
 *     tags={"Shop"},
 *     summary="Get a single shop",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Shop not found")
 * )
 *
 * @OA\Post(
 *     path="/shops",
 *     tags={"Shop"},
 *     summary="Create a new shop",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Shop created")
 * )
 *
 * @OA\Put(
 *     path="/shops/{id}",
 *     tags={"Shop"},
 *     summary="Update a shop",
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
 *     @OA\Response(response=200, description="Shop updated"),
 *     @OA\Response(response=404, description="Shop not found")
 * )
 *
 * @OA\Delete(
 *     path="/shops/{id}",
 *     tags={"Shop"},
 *     summary="Delete a shop",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Shop deleted"),
 *     @OA\Response(response=404, description="Shop not found")
 * )
 */
class ShopController extends BaseApiController
{
    protected string $modelClass = Shop::class;
}
