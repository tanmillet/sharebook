<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class RoleCreateArgsDoesNotExists
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class RolePermissionCreateFalied extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $roleName
     * @param string $guardName
     * @return static
     */
    public static function create($errorMsg)
    {
        return new static($errorMsg);
    }
}
