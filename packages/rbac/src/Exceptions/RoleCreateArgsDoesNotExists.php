<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class RoleCreateArgsDoesNotExists
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class RoleCreateArgsDoesNotExists extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $roleName
     * @param string $guardName
     * @return static
     */
    public static function create(string $roleName, string $roleGuardName)
    {
        $errorMsg = isset($roleName) ? '' : '角色数据结构 [display_name] 不能为空';
        $errorMsg .= isset($roleGuardName) ? '.' : ', 角色数据结构 [name] 不能为空.';
        return new static($errorMsg);
    }
}
