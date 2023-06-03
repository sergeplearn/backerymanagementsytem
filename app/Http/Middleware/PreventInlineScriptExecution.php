<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventInlineScriptExecution
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $responce = $next($request);
        $responce->headers->set('Content-Security-Policy', "script-src http://127.0.0.1:8000 https://cdn.jsdelivr.net http://127.0.0.1:5173 https://code.jquery.com https://cdn.datatables.net https://mdbcdn.b-cdn.net 'unsafe-eval' 'nonce-2726c7f26c98' "); //nonce-2726c7f26c98  just add 'unsafe-inline' for inline scripts to run

        return $responce;
    }
}
