<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('comments');
    }

    public $guarded = [
        'id'
    ];

    public $fillable = [
            'post_id',
            'context',
            'commentable_type',
            'commentable_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);

        //如果 Comment 模型的外键不是 post_id，那么可以将自定义键名作为第二个参数传递给belongsTo方法
        return $this->belongsTo('App\Post', 'foreign_key');

        //如果父级模型没有使用 id 作为主键，或者是希望用不同的字段来连接子级模型，
        //则可以通过给 belongsTo方法传递第三个参数的形式指定父级数据表的自定义键
        return $this->belongsTo('App\Post', 'foreign_key', 'other_key');
    }

    /**
     * 获得拥有此评论的模型。
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}
