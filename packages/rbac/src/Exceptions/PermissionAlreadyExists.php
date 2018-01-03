<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class PermissionAlreadyExists
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class PermissionAlreadyExists extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $permissionName
     * @param string $guardName
     * @return static
     */
    public static function create(string $permissionName, $roleName)
    {
        return new static(" `{$permissionName}` 权限, 角色组 `{$roleName}` 已经存在！");
    }
}
