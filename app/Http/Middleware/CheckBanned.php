<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->banned_until && now()->lessThan(auth()->user()->banned_until)) {
            $banned_days = (int) floor(now()->diffInDays(auth()->user()->banned_until));
            auth()->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            if ($banned_days > 14) {
                $message = 'Your account has been suspended. Please contact administrator.';
            } else {
                $message = 'Your account has been suspended for ' . $banned_days . ' ' . Str::plural('day', $banned_days) . '. Please contact administrator.';
            }

            return redirect()->route('login')->withMessage($message);
        }

        return $next($request);
    }
}
