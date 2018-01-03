<?php

namespace LucasRBAC\Permission\Traits;

use Illuminate\Support\Collection;
use LucasRBAC\Permission\Exceptions\PermissionAlreadyExists;
use LucasRBAC\Permission\Exceptions\RolePermissionCreateFalied;
use LucasRBAC\Permission\Models\Role;

/**
 * Class HasRoles
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Traits
 */
trait HasRoles
{
    use HasPermissions;

    /**
     * @author Terry Lucas
     * @param array $attributes
     */
    public function createRolePermisson(array $attributes)
    {
        $role = Role::find($attributes['role_id']);
        $ownerPermissions = collect($role->permissions)->pluck('id');

        if (is_array($ownerPermissions) && in_array($attributes['permission_id'], $ownerPermissions)) {
            throw  PermissionAlreadyExists::create($role->display_name);
        }
        try {
            $role->permissions()->attach($attributes['permission_id']);
        } catch (\Exception $exception) {
            throw RolePermissionCreateFalied::create();
        }
    }


    /**
     * @author Terry Lucas
     */
    public static function bootHasRoles()
    {
        static::deleting(
            function ($model) {
                if (method_exists($model, 'isForceDeleting') && !$model->isForceDeleting()) {
                    return;
                }
                $model->roles()->detach();
                $model->permissions()->detach();
            }
        );
    }

    /**
     * @author Terry Lucas
     * @param $role
     */
    public function removeRole($role)
    {
        $this->roles()->detach($this->getStoredRole($role));
    }


    /**
     * @author Terry Lucas
     * @return Collection
     */
    public function getRoleNames(): Collection
    {
        return $this->roles->pluck('name');
    }

}
