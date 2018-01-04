<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestPost extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('test_posts');
    }

    public function testComments()
    {
        return $this->hasMany(TestComment::class);
    }
}
