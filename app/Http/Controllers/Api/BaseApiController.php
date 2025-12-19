<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="My POS App API",
 *     description="API documentation for My POS App backend."
 * )
 */

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="My POS App API",
 *     description="API documentation for My POS App backend."
 * )
 */

/**
 * @OA\Tag(
 *     name="Resource",
 *     description="Generic resource operations"
 * )
 */
abstract class BaseApiController extends Controller
{
    // Child controllers should set the modelClass property
    protected string $modelClass;

    /**
     * @OA\Get(
     *     path="/resource",
     *     tags={"Resource"},
     *     summary="List all resources",
     *     @OA\Response(response=200, description="Successful operation")
     * )
     */
    public function index()
    {
        $model = $this->modelClass;
        return response()->json(($model)::all());
    }

    /**
     * @OA\Get(
     *     path="/resource/{id}",
     *     tags={"Resource"},
     *     summary="Get a single resource",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Resource not found")
     * )
     */
    public function show($id)
    {
        $model = $this->modelClass;
        return response()->json(($model)::findOrFail($id));
    }

    /**
     * @OA\Post(
     *     path="/resource",
     *     tags={"Resource"},
     *     summary="Create a new resource",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(type="object")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Resource created")
     * )
     */
    public function store(Request $request)
    {
        $modelClass = $this->modelClass;
        $instance = new $modelClass();
        $data = $request->only($instance->getFillable());
        $created = ($modelClass)::create($data);
        return response()->json($created, 201);
    }

    /**
     * @OA\Put(
     *     path="/resource/{id}",
     *     tags={"Resource"},
     *     summary="Update a resource",
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
     *     @OA\Response(response=200, description="Resource updated"),
     *     @OA\Response(response=404, description="Resource not found")
     * )
     */
    public function update(Request $request, $id)
    {
        $modelClass = $this->modelClass;
        $instance = ($modelClass)::findOrFail($id);
        $data = $request->only($instance->getFillable());
        $instance->update($data);
        return response()->json($instance, 200);
    }

    /**
     * @OA\Delete(
     *     path="/resource/{id}",
     *     tags={"Resource"},
     *     summary="Delete a resource",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=204, description="Resource deleted"),
     *     @OA\Response(response=404, description="Resource not found")
     * )
     */
    public function destroy($id)
    {
        $modelClass = $this->modelClass;
        $instance = ($modelClass)::findOrFail($id);
        $instance->delete();
        return response()->json(null, 204);
    }
}
