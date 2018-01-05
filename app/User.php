<?php

namespace App;

use App\Model\Phone;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LucasRBAC\Permission\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @author Terry Lucas
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'role_user'
        );

        // 如果您想让中间表自动维护 created_at 和 updated_at 时间戳，那么在定义关联时加上 withTimestamps 方法即可。
        return $this->belongsToMany(Role::class)->withTimestamps();

        //除了自定义连接表表名，您也可以通过给 belongsToMany 方法再次传递额外参数来自定义连接表里的键的字段名称。
        //第三个参数是定义此关联的模型在连接表里的键名，
        //第四个参数是另一个模型在连接表里的键名
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    /**
     * 获得与用户关联的电话记录。
     */
    public function phone()
    {
        //默认方式
        return $this->hasOne(Phone::class);

        //如果外键名不是这个，可以通过给 hasOne 方法传递第二个参数覆盖默认使用的外键名
        return $this->hasOne(Phone::class, 'test_user_id');

        //Eloquent 假定外键值是与父级 id（或自定义 $primaryKey）列的值相匹配的。
        // 换句话说，Eloquent 将在 Phone 记录的 user_id 列中查找与用户表的 id 列相匹配的值。 如果您希望该关联使用 id以外的自定义键名，则可以给 hasOne 方法传递第三个参数
        return $this->hasOne(Phone::class, 'test_user_id' , 'id');
    }
}
