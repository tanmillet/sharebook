<?php

namespace LucasRBAC\Permission\Exceptions;

use InvalidArgumentException;

/**
 * Class RoleCreateArgsDoesNotExists
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Exceptions
 */
class CreateArgsDoesNotExists extends InvalidArgumentException
{
    /**
     * @author Terry Lucas
     * @param string $roleName
     * @param string $guardName
     * @return static
     */
    public static function create(string $attributeMsg)
    {
        return new static($attributeMsg." 参数不能为空");
    }
}
