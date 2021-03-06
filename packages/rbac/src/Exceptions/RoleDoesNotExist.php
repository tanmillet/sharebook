<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class RoleDoesNotExist
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class RoleDoesNotExist extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $roleName
     * @return static
     */
    public static function create(string $roleName)
    {
        return new static("角色名称不存在 `{$roleName}`.");
    }
}
