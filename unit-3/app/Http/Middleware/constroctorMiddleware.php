<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class constroctorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //set constraints
        $age=$request->query('age');
        if(!$age||$age<18){
            return response("middleware activeted");
        }
        return $next($request);
    }
}
