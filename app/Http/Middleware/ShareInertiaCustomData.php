<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShareInertiaCustomData
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
        foreach (config('app.available_locales') as $key => $value) {
            if($value == app()->getLocale()){
                $localeName = $key;
            }
        }

        Inertia::share([
                'available_locales' => config('app.available_locales'),
                'lang' => app('translator')->get('*'),
                'getLocale' => app()->getLocale(),
                'getLocaleName' => $localeName,
        ]);

        return $next($request);
    }
}
