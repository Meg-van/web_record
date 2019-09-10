<?php

namespace App\Http\Middleware;

use Closure;

class APIToken
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
        if($request->header('Authorization')){
            return $next($request);([
            'message' => 'Lecturers Succesfully created!',
            ]);
        }
        return response()->json([
            'message' => 'Permission denied. Please try again!',
        ]);
    }
}
