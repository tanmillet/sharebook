<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestUser extends Model
{

    public $timestamps = FALSE;

    //
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('test_users');
    }

    /**
     * 获得与用户关联的电话记录。
     */
    public function testPhone()
    {
        //默认方式
        return $this->hasOne(TestPhone::class);

        //如果外键名不是这个，可以通过给 hasOne 方法传递第二个参数覆盖默认使用的外键名
        // return $this->hasOne(TestPhone::class, 'test_user_id');

        //Eloquent 假定外键值是与父级 id（或自定义 $primaryKey）列的值相匹配的。
        // 换句话说，Eloquent 将在 Phone 记录的 user_id 列中查找与用户表的 id 列相匹配的值。 如果您希望该关联使用 id以外的自定义键名，则可以给 hasOne 方法传递第三个参数
        // return $this->hasOne(TestPhone::class, 'test_user_id' , 'id');
    }
}
