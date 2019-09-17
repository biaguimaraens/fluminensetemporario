<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
                // acessa a resposta
                $response = $next($request);

                $response->headers->set('Access-Control-Allow-Origin' ,'http://localhost:4200' );
                $response->headers->set('Access-Control-Allow-Methods' , 'GET, POST, PUT, DELETE, OPTIONS' );
                $response->headers->set('Access-Control-Allow-Headers' , 'Authorization, Content-Type' );
        
                return $response;
    }
}
