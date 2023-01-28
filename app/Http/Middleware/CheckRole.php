<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if($role == 'Admin' && auth()->user()->role->id == 1){
            
            return $next($request);
        }
        elseif($role == 'Biker' && auth()->user()->role->id == 2){
            return $next($request);
        }
        elseif($role == 'Sender' && auth()->user()->role->id == 3){
            return $next($request);
        }else{

            return response()->json("Unauthorized");
        }

        
    }
}
