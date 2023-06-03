<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $roles = [
            'admin' => ['admin'],
            'user' => ['admin', 'user'],
        ];
        $roleid = $roles[$role] ?? [];
        if (! in_array(Auth::user()->role, $roleid)) {

            return redirect('/error');

        }

        return $next($request);
    }
}
