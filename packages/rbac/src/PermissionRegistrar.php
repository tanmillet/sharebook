<?php

namespace LucasRBAC\Permission;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Contracts\Auth\Authenticatable;
use LucasRBAC\Permission\Exceptions\PermissionDoesNotExist;
use LucasRBAC\Permission\Models\Permission;

/**
 * Class PermissionRegistrar
 * Author Terry Lucas
 * @package LucasRBAC\Permission
 */
class PermissionRegistrar
{
    /** @var \Illuminate\Contracts\Auth\Access\Gate */
    protected $gate;

    /** @var \Illuminate\Contracts\Cache\Repository */
    protected $cache;

    /** @var string */
    protected $cacheKey = 'lucas.permission.cache';

    /**
     * @author Terry Lucas
     * PermissionRegistrar constructor.
     * @param Gate $gate
     * @param Repository $cache
     */
    public function __construct(Gate $gate, Repository $cache)
    {
        $this->gate = $gate;
        $this->cache = $cache;
    }

    /**
     * @author Terry Lucas
     * @return bool
     */
    public function registerPermissions(): bool
    {
        $this->gate->before(
            function (Authenticatable $user, string $ability) {
                try {
                    if (method_exists($user, 'hasPermissionTo')) {
                        return $user->hasPermissionTo($ability);
                    }
                } catch (PermissionDoesNotExist $e) {
                }
            }
        );

        return TRUE;
    }

    /**
     * @author Terry Lucas
     */
    public function forgetCachedPermissions()
    {
        $this->cache->forget($this->cacheKey);
    }

    /**
     * @author Terry Lucas
     * @return Collection
     */
    public function getPermissions(): Collection
    {
        return $this->cache->remember(
            $this->cacheKey,
            1,
            function () {
                return Permission::all();
            }
        );
    }
}
