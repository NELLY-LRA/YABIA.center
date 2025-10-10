<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;


class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        // Récupère la langue depuis la session, sinon utilise la langue par défaut
        $locale = session('locale', config('app.locale'));
        app()->setLocale($locale);

        return $next($request);
    }
}
