<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;

/**
 * @OA\Tag(
 *     name="Product",
 *     description="Product management"
 * )
 *
 * @OA\Get(
 *     path="/products",
 *     tags={"Product"},
 *     summary="List all products",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/products/{id}",
 *     tags={"Product"},
 *     summary="Get a single product",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Product not found")
 * )
 *
 * @OA\Post(
 *     path="/products",
 *     tags={"Product"},
 *     summary="Create a new product",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Product created")
 * )
 *
 * @OA\Put(
 *     path="/products/{id}",
 *     tags={"Product"},
 *     summary="Update a product",
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
 *     @OA\Response(response=200, description="Product updated"),
 *     @OA\Response(response=404, description="Product not found")
 * )
 *
 * @OA\Delete(
 *     path="/products/{id}",
 *     tags={"Product"},
 *     summary="Delete a product",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Product deleted"),
 *     @OA\Response(response=404, description="Product not found")
 * )
 */
class ProductController extends BaseApiController
{
    protected string $modelClass = Product::class;
}
