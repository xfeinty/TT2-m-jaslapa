<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if($request->user()===null){
            return response ("NO", 401);
        }
        $actions = $request->route()->getAction();
        $roles= isset($actions['roles']) ? $actions['roles'] :null;

        if($request->user()->hasAnyRoles($roles) || !$roles){
            return $next($request);
        }
        return response ("NO", 401);
    }
}
