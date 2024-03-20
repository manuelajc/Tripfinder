<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TranslatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si el usuario está autenticado y tiene el rol de traductor
        if (auth()->check() && auth()->user()->role == 'translator' || auth()->check() && auth()->user()->role == 'admin') {
            return $next($request);
        }

        // Si no tiene el rol de traductor, mostrar error 403 (Prohibido)
        abort(403, 'No tienes permisos para acceder a esta página.');
    }
}
