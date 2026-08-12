<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
   public function handle(Request $request, Closure $next, string $role): Response
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!$user || $user->role != $role) {
            abort(403);
        }

        return $next($request);
    }
}
