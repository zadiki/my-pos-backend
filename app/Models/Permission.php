<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Permission",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="view_products"),
 *     @OA\Property(property="description", type="string", example="Allows viewing products"),
 * )
 */
class Permission extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];
}
