<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = FALSE;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('phones');
    }
    /**
     * 获得拥有此电话的用户。
     */
    public function testUser()
    {
        //默认方式
        return $this->belongsTo(TestUser::class)->withDefault();

        return $this->belongsTo('App\User')->withDefault(
            [
                'name' => '游客',
            ]
        );
        return $this->belongsTo('App\User')->withDefault(
            function ($user) {
                $user->name = '游客';
            }
        );

        //如果Phone模型的外键不是user_id，那么可以将自定义键名作为第二个参数传递给belongsTo方法：
        return $this->belongsTo(TestUser::class, 'test_user_id');

        //如果父级模型没有使用 id 作为主键，或者是希望用不同的字段来连接子级模型，则可以通过给 belongsTo 方法传递第三个参数的形式指定父级数据表的自定义键：
        return $this->belongsTo(TestUser::class, 'test_user_id' , 'id');
    }

}
