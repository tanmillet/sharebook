<?php

namespace LucasRBAC\Permission\Models;

use Illuminate\Database\Eloquent\Model;
use LucasRBAC\Permission\Exceptions\RoleCreateArgsDoesNotExists;
use LucasRBAC\Permission\Traits\HasPermissions;
use LucasRBAC\Permission\Exceptions\RoleDoesNotExist;
use LucasRBAC\Permission\Exceptions\GuardDoesNotMatch;
use LucasRBAC\Permission\Exceptions\RoleAlreadyExists;
use LucasRBAC\Permission\Contracts\Role as RoleContract;
use LucasRBAC\Permission\Traits\RefreshesPermissionCache;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Role
 * Author Terry Lucas
 * @package LucasRBAC\Permission\Models
 */
class Role extends Model implements RoleContract
{
    use HasPermissions;
    use RefreshesPermissionCache;

    /**
     * @author Terry Lucas
     * @var array
     */
    public $guarded = ['id'];

    /**
     * @author Terry Lucas
     * Role constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $attributes['guard_name'] = $attributes['guard_name'] ?? config('auth.defaults.guard');

        parent::__construct($attributes);

        $this->setTable(config('permission.table_names.roles'));
    }

    /**
     * @author Terry Lucas
     * @param array $attributes
     * @return $this|Model
     */
    public static function create(array $attributes = [])
    {
        if (!isset($attributes['guard_name']) || !isset($attributes['name'])) {
            throw RoleCreateArgsDoesNotExists::create($attributes['name'], $attributes['guard_name']);
        }

        if (static::where('name', $attributes['name'])->where('guard_name', $attributes['guard_name'])->first()) {
            throw RoleAlreadyExists::create($attributes['name'], $attributes['guard_name']);
        }

        if (app()::VERSION < '5.4') {
            return parent::create($attributes);
        }

        return static::query()->create($attributes);
    }

    /**
     * A role may be given various permissions.
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            config('permission.models.permission'),
            config('permission.table_names.role_has_permissions')
        );
    }

    /**
     * A role belongs to some users of the model associated with its guard.
     */
    public function users(): MorphToMany
    {
        return $this->morphedByMany(
            getModelForGuard($this->attributes['guard_name']),
            'model',
            config('permission.table_names.model_has_roles'),
            'role_id',
            'model_id'
        );
    }

    /**
     * Find a role by its name and guard name.
     *
     * @param string $name
     * @param string|null $guardName
     *
     * @return \Spatie\Permission\Contracts\Role|\Spatie\Permission\Models\Role
     *
     * @throws \Spatie\Permission\Exceptions\RoleDoesNotExist
     */
    public static function findByName(string $name, $guardName = NULL): RoleContract
    {
        $guardName = $guardName ?? config('auth.defaults.guard');

        $role = static::where('name', $name)->where('guard_name', $guardName)->first();

        if (!$role) {
            throw RoleDoesNotExist::create($name);
        }

        return $role;
    }

    /**
     * Determine if the user may perform the given permission.
     *
     * @param string|Permission $permission
     *
     * @return bool
     *
     * @throws \Spatie\Permission\Exceptions\GuardDoesNotMatch
     */
    public function hasPermissionTo($permission): bool
    {
        if (is_string($permission)) {
            $permission = app(Permission::class)->findByName($permission, $this->getDefaultGuardName());
        }

        if (!$this->getGuardNames()->contains($permission->guard_name)) {
            throw GuardDoesNotMatch::create($permission->guard_name, $this->getGuardNames());
        }

        return $this->permissions->contains('id', $permission->id);
    }
}
