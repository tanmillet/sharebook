<?php

namespace LucasRBAC\Permission\Middlewares;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class RoleMiddleware
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Middlewares
 */
class RoleMiddleware
{
    /**
     * @author Terry Lucas
     * @param $request
     * @param Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::guest()) {
            abort(403);
        }

        $role = is_array($role)
            ? $role
            : explode('|', $role);

        if (! Auth::user()->hasAnyRole($role)) {
            abort(403);
        }

        return $next($request);
    }
}
