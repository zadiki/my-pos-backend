<?php

namespace App\Http\Controllers\Api;

use App\Models\Permission;

/**
 * @OA\Tag(
 *     name="Permission",
 *     description="Permission management"
 * )
 *
 * @OA\Get(
 *     path="/permissions",
 *     tags={"Permission"},
 *     summary="List all permissions",
 *     @OA\Response(response=200, description="Successful operation")
 * )
 *
 * @OA\Get(
 *     path="/permissions/{id}",
 *     tags={"Permission"},
 *     summary="Get a single permission",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=200, description="Successful operation"),
 *     @OA\Response(response=404, description="Permission not found")
 * )
 *
 * @OA\Post(
 *     path="/permissions",
 *     tags={"Permission"},
 *     summary="Create a new permission",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(type="object")
 *         )
 *     ),
 *     @OA\Response(response=201, description="Permission created")
 * )
 *
 * @OA\Put(
 *     path="/permissions/{id}",
 *     tags={"Permission"},
 *     summary="Update a permission",
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
 *     @OA\Response(response=200, description="Permission updated"),
 *     @OA\Response(response=404, description="Permission not found")
 * )
 *
 * @OA\Delete(
 *     path="/permissions/{id}",
 *     tags={"Permission"},
 *     summary="Delete a permission",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response=204, description="Permission deleted"),
 *     @OA\Response(response=404, description="Permission not found")
 * )
 */
class PermissionController extends BaseApiController
{
    protected string $modelClass = Permission::class;
}
