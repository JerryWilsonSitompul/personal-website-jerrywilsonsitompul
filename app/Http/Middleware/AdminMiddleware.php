<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::debug('--- AdminMiddleware START ---');
        $user = auth()->user();
        
        if (!$user) {
            Log::warning('AdminMiddleware: User is NOT authenticated. Redirecting to login.');
            Log::debug('--- AdminMiddleware END ---');
            return redirect()->route('login');
        }
        
        Log::debug('AdminMiddleware: User is authenticated: ' . $user->email);

        if (!$user->is_admin && !in_array($user->role, ['admin', 'editor'])) {
            Log::warning('AdminMiddleware: User does not have admin/editor role. Aborting with 403.');
            Log::debug('--- AdminMiddleware END ---');
            abort(403, 'Access denied');
        }
        
        Log::debug('AdminMiddleware: User has correct role. Proceeding.');
        Log::debug('--- AdminMiddleware END ---');
        return $next($request);
    }
}
