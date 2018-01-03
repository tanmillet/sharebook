<?php

namespace LucasRBAC\Permission\Traits;

use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;

/**
 * Class HasPermissions
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Traits
 */
trait HasPermissions
{

    /**
     * @author Terry Lucas
     * @param $permission
     * @return $this
     */
    public function revokePermissionTo($permission)
    {
        $this->permissions()->detach($this->getStoredPermission($permission));

        $this->forgetCachedPermissions();

        return $this;
    }

    /**
     * @author Terry Lucas
     * @param $permissions
     * @return Permission
     */
    protected function getStoredPermission($permissions): Permission
    {
        if (is_string($permissions)) {
            return app(Permission::class)->findByName($permissions, $this->getDefaultGuardName());
        }

        if (is_array($permissions)) {
            return app(Permission::class)
                ->whereIn('name', $permissions)
                ->whereId('guard_name', $this->getGuardNames())
                ->get();
        }

        return $permissions;
    }

    /*
         * Forget the cached permissions.
         */
    /**
     * @author Terry Lucas
     */
    public function forgetCachedPermissions()
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
