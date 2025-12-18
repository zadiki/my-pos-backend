<?php

namespace App\Http\Controllers\Api;

use App\Models\InventoryChangeTransaction;

/**
 * @OA\Tag(
 *     name="InventoryChangeTransactions",
 *     description="API Endpoints for Inventory Change Transactions"
 * )
 */
class InventoryChangeTransactionController extends BaseApiController
{
    protected string $modelClass = InventoryChangeTransaction::class;
}


/**
 * @OA\Get(
 *     path="/inventory-change-transactions",
 *     summary="Get list of inventory change transactions",
 *     tags={"InventoryChangeTransactions"},
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation"
 *     )
 * )
 *
 * @OA\Post(
 *     path="/inventory-change-transactions",
 *     summary="Create a new inventory change transaction",
 *     tags={"InventoryChangeTransactions"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/InventoryChangeTransaction")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Created"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/inventory-change-transactions/{id}",
 *     summary="Get an inventory change transaction by ID",
 *     tags={"InventoryChangeTransactions"},
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
 *     path="/inventory-change-transactions/{id}",
 *     summary="Update an inventory change transaction",
 *     tags={"InventoryChangeTransactions"},
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
 *             @OA\Schema(ref="#/components/schemas/InventoryChangeTransaction")
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
 *     path="/inventory-change-transactions/{id}",
 *     summary="Delete an inventory change transaction",
 *     tags={"InventoryChangeTransactions"},
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
