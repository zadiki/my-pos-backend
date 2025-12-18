<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;

/**
 * @OA\Tag(
 *     name="Company",
 *     description="Company management"
 * )
 */
class CompanyController extends BaseApiController
{
    protected string $modelClass = Company::class;

    /**
     * @OA\Get(
     *     path="/companies",
     *     tags={"Company"},
     *     summary="List all companies",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */

    /**
     * @OA\Get(
     *     path="/companies/{id}",
     *     tags={"Company"},
     *     summary="Get a single company",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Company not found")
     * )
     */

    /**
     * @OA\Post(
     *     path="/companies",
     *     tags={"Company"},
     *     summary="Create a new company",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Company created")
     * )
     */

    /**
     * @OA\Put(
     *     path="/companies/{id}",
     *     tags={"Company"},
     *     summary="Update a company",
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
     *     @OA\Response(response=200, description="Company updated"),
     *     @OA\Response(response=404, description="Company not found")
     * )
     */

    /**
     * @OA\Delete(
     *     path="/companies/{id}",
     *     tags={"Company"},
     *     summary="Delete a company",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Company deleted"),
     *     @OA\Response(response=404, description="Company not found")
     * )
     */
}
