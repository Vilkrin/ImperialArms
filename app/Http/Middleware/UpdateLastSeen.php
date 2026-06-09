<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateLastSeen
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            auth()->check() &&
            (
                ! auth()->user()->last_seen ||
                auth()->user()->last_seen->lt(now()->subMinute())
            )
        ) {
            auth()->user()->forceFill([
                'last_seen' => now(),
            ])->saveQuietly();
        }

        return $next($request);
    }
}
