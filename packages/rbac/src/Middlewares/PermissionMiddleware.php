<?php

namespace LucasRBAC\Permission\Middlewares;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class PermissionMiddleware
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Middlewares
 */
class PermissionMiddleware
{
    /**
     * @author Terry Lucas
     * @param $request
     * @param Closure $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (Auth::guest()) {
            abort(403);
        }

        $permissions = is_array($permission)
            ? $permission
            : explode('|', $permission);

        foreach ($permissions as $permission) {
            if (Auth::user()->can($permission)) {
                return $next($request);
            }
        }

        abort(403);
    }
}
