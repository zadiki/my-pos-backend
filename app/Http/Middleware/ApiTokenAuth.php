<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApiTokenAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $header = $request->bearerToken();

        if (empty($header)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // api_token is stored as sha256(token) for safety, so hash the incoming token
        $tokenHash = hash('sha256', $header);
        $user = User::where('api_token', $tokenHash)->first();

        if (! $user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        Auth::login($user);

        return $next($request);
    }
}
