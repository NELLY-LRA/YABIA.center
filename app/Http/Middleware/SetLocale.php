<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Récupère la langue depuis la session, sinon utilise la langue par défaut
        $locale = session('locale', config('app.locale'));
        app()->setLocale($locale);

        return $next($request);
    }
}
