<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('auth.deconnexion'); // Redirige vers la page de connexion
        }

        // Vérifie si l'utilisateur a l'un des rôles requis
        foreach ($roles as $role) {
            if (Auth::user()->hasRole($role)) {
                return $next($request); // Autorise l'accès
            }
        }

        // Si l'utilisateur n'a aucun des rôles requis, redirige vers la page 403
        return redirect()->route('403');
    }
}
