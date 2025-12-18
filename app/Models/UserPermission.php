<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(
 *   schema="UserPermission",
 *   type="object",
 *   required={"user_id", "permission_id"},
 *   @OA\Property(property="id", type="integer", readOnly=true),
 *   @OA\Property(property="user_id", type="integer"),
 *   @OA\Property(property="permission_id", type="integer"),
 *   @OA\Property(property="created_at", type="string", format="date-time", readOnly=true),
 *   @OA\Property(property="updated_at", type="string", format="date-time", readOnly=true)
 * )
 */
class UserPermission extends Model
{
    protected $fillable = [
        'user_id',
        'permission_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
