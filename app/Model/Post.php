<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('posts');
    }

    // public function testComments()
    // {
    //     return $this->hasMany(TestComment::class);

        // return $this->hasMany('App\Comment', 'foreign_key');

        // return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    // }

    /**
     * 获得此文章的所有评论。
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * 获得此文章的所有标签。
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
