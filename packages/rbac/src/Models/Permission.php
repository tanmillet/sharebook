<?php

namespace LucasRBAC\Permission\Models;

// use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use LucasRBAC\Permission\Exceptions\PermissionAlreadyExists;
use LucasRBAC\Permission\Exceptions\PermissionDoesNotExist;
use LucasRBAC\Permission\PermissionRegistrar;

// use Spatie\Permission\PermissionRegistrar;
// use LucasRBAC\Permission\Traits\RefreshesPermissionCache;
// use Illuminate\Database\Eloquent\Relations\MorphToMany;
// use Spatie\Permission\Exceptions\PermissionDoesNotExist;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Spatie\Permission\Exceptions\PermissionAlreadyExists;
use LucasRBAC\Permission\Contracts\Permission as PermissionContract;

// class Permission extends Model implements PermissionContract
class Permission extends Model
{
    // use RefreshesPermissionCache;
    /**
     * @author Terry Lucas
     * @var array
     */
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];

    /**
     * @author Terry Lucas
     * @var array
     */
    protected $fillable = [
        'name',
        'guard_name',
        'is_type',
        'is_parent',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('permissions'));
    }

    public static function create(array $attributes = [])
    {
        if (Permission::where('name', $attributes['name'])->where(
            'is_type',
            $attributes['is_type']
        )->first()
        ) {
            throw PermissionAlreadyExists::create($attributes['name'], $attributes['guard_name']);
        }



        if (app()::VERSION < '5.4') {
            return parent::create($attributes);
        }

        return static::query()->create($attributes);
    }

    /**
     * A permission can be applied to roles.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'permission_role'
        );
    }

    /**
     * @author Terry Lucas
     * @param string $name
     * @param null $guardName
     * @return PermissionContract
     */
    public static function findByName(string $name, $guardName = NULL): PermissionContract
    {
        $permission = static::getPermissions()->where('name', $name)->first();

        if (!$permission) {
            throw PermissionDoesNotExist::create($name, $guardName);
        }

        return $permission;
    }

    /**
     * Get the current cached permissions.
     */
    protected static function getPermissions(): Collection
    {
        dump(app(PermissionRegistrar::class));
        dump('OK');die();
        return app(PermissionRegistrar::class)->getPermissions();
    }
}
