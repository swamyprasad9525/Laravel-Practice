<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        //Set sesstion for locale value
        if(Session()->has('locale')){
            App::SetLocale(Session('locale'));
        }
        // Another way to implement localization dynamically
        //  try {
        // $locale = session('locale');

        // if (in_array($locale, ['en', 'hi', 'pa','ta'])) {
        //     \Illuminate\Support\Facades\App::setLocale($locale);
        // }
        // } catch (\Exception $e) {
        // // fail silently (don’t break app)
        // }

        return $next($request);
    }
}
