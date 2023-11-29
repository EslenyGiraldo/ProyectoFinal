<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
 
    public function handle($request, Closure $next, $roles)
    {
        $newRole=explode('|',$roles);
        $roleName=strtolower($request->user()->role->label);
        if(in_array($roleName,$newRole))
            return abort(403,__('Unauthorized'));
        return $next($request);
    }
}
