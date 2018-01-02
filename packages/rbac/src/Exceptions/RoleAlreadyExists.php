<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class RoleAlreadyExists
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class RoleAlreadyExists extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $roleName
     * @param string $guardName
     * @return static
     */
    public static function create(string $roleName, string $guardName)
    {
        return new static("角色标识 `{$roleName}` 已经存在角色名称是 `{$guardName}`.");
    }
}
