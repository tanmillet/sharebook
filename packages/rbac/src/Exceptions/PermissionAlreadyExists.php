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
    public static function create(string $permissionName, string $guardName)
    {
        return new static(" `{$permissionName}` permission 已经存在！");
    }
}
