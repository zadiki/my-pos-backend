<?php
namespace App\Http\Controllers\Api;
use App\Models\UserPermission;

/**
 * @OA\Tag(
 *     name="UserPermissions",
 *     description="API Endpoints for User Permissions"
 * )
 *
 * @OA\Get(
 *     path="/user-permissions",
 *     summary="Get list of user permissions",
 *     tags={"UserPermissions"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation"
 *     )
 * )
 *
 * @OA\Post(
 *     path="/user-permissions",
 *     summary="Create a new user permission",
 *     tags={"UserPermissions"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UserPermission")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Created"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/user-permissions/{id}",
 *     summary="Get a user permission by ID",
 *     tags={"UserPermissions"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Not found"
 *     )
 * )
 *
 * @OA\Put(
 *     path="/user-permissions/{id}",
 *     summary="Update a user permission",
 *     tags={"UserPermissions"},
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
 *             @OA\Schema(ref="#/components/schemas/UserPermission")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Updated"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Not found"
 *     )
 * )
 *
 * @OA\Delete(
 *     path="/user-permissions/{id}",
 *     summary="Delete a user permission",
 *     tags={"UserPermissions"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Deleted"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Not found"
 *     )
 * )
 */
class UserPermissionController extends BaseApiController
{
    protected string $modelClass = UserPermission::class;
}
