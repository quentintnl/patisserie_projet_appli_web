<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanDeleteRecipe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = auth()->user();
        // $recipe = $request->route('recipe');

        // Vérifie si l'utilisateur est l'administrateur ou le créateur de la recette
        // if ($user->isAdmin() || $recipe->user_id === $user->id) {
        //     return $next($request);
        // }

        // return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à supprimer cette recette.');
    }
        // return $next($request);
}
