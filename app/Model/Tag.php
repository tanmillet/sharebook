<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('tags');
    }

    /**
     * 获得此标签下所有的文章。
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     *  获得此标签下所有的视频。
     */
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
