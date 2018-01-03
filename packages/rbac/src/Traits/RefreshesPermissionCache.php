<?php

namespace LucasRBAC\Permission\Traits;

use LucasRBAC\Permission\PermissionRegistrar;

/**
 * Class RefreshesPermissionCache
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Traits
 */
trait RefreshesPermissionCache
{
    /**
     * @author Terry Lucas
     */
    public static function bootRefreshesPermissionCache()
    {
        static::saved(function () {
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        });

        static::deleted(function () {
            app(PermissionRegistrar::class)->forgetCachedPermissions();
        });
    }
}
