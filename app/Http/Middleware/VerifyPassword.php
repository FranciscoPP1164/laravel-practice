<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//Middlewares are used to create layers capable of analyzing the incoming request or outgoing response to process it before letting it enter our application layer.

class VerifyPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasHeader('Password')) {
            return response('the authorization password header is not provided', 400);
        }

        if ($request->header('Password') !== '12345') {
            return response('the authorization password is incorrect', 401);
        }

        return $next($request);
    }
}
