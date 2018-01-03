<?php

namespace LucasRBAC\Permission\Traits;

use Illuminate\Support\Collection;
use LucasRBAC\Permission\Exceptions\PermissionAlreadyExists;
use LucasRBAC\Permission\Exceptions\RolePermissionCreateFalied;
use LucasRBAC\Permission\Models\Permission;
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
    public function createRolePermisson(array $attributes, string $type)
    {
        return ($type == 'single')
            ? $this->singleSyncPermission($attributes)
            : $this->allSyncPermission($attributes);
    }

    /**
     * @author Terry Lucas
     * @param array $attributes
     */
    protected function allSyncPermission(array $attributes)
    {
        try {
            $perm = Permission::where('is_parent', $attributes['permission_id'])->get();
            //进行赋权IDs
            $permIds = collect($perm)->pluck('id');
            //当前角色拥有权限
            $role = Role::find($attributes['role_id']);
            $ownerPermissions = collect($role->permissions)->pluck('id')->toArray();
            //差集
            $dispatchPermissions = $permIds->diff($ownerPermissions)->all();
            //更新
            $role->permissions()->syncWithoutDetaching($dispatchPermissions);
        } catch (\Exception $exception) {
            throw RolePermissionCreateFalied::create('权限指派失败');
        }
    }

    /**
     * @author Terry Lucas
     * @param array $attributes
     */
    protected function singleSyncPermission(array $attributes)
    {
        try {
            $perm = Permission::find($attributes['permission_id']);
            if (is_null($perm)) {
                throw PermissionDoesNotExist::create($perm->guard_name);
            }

            $role = Role::find($attributes['role_id']);
            $ownerPermissions = collect($role->permissions)->pluck('id')->toArray();
            if (is_array($ownerPermissions) && in_array($attributes['permission_id'], $ownerPermissions)) {
                throw  PermissionAlreadyExists::create($perm->guard_name, $role->display_name);
            }

            $role->permissions()->syncWithoutDetaching($attributes['permission_id']);
        } catch (\Exception $exception) {
            throw RolePermissionCreateFalied::create('权限指派失败');
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

    /**
     * @author Terry Lucas
     * @param string $menuType
     * @return array
     */
    protected function getPermissionByType(string $menuType): array
    {
        $perm = Permission::where('is_parent', $menuType)->get();

        return collect($perm)->pluck('id')->toArray();
    }

}
