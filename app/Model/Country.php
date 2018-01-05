<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('countries');
    }

    /**
     * 获得某个国家下所有的用户文章。
     */
    public function posts()
    {
        return $this->hasManyThrough(Post::class, TestUser::class);

        //当执行关联查询时，通常会使用 Eloquent 约定的外键名。如果您想要自定义关联的键，
        //可以通过给 hasManyThrough 方法传递第三个和第四个参数实现，
        //第三个参数表示中间模型的外键名，
        //第四个参数表示最终模型的外键名。
        //第五个参数表示本地键名，
        //而第六个参数表示中间模型的本地键名：
        return $this->hasManyThrough(
            'App\Post',
            'App\User',
            'country_id', // 用户表外键...
            'user_id', // 文章表外键...
            'id', // 国家表本地键...
            'id' // 用户表本地键...
        );
    }
}
