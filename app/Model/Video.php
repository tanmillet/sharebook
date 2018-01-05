<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('videos');
    }
    /**
     * 获得此文章的所有评论。
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
