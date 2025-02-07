<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Get the locale from the session or fallback to 'fr'
        $locale = session('locale', 'fr');

        // Set the locale for the application
        app()->setLocale($locale);

        return $next($request);
    }
}
