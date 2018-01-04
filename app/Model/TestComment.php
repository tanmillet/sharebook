<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestComment extends Model
{
    public $timestamps = FALSE;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('test_comments');
    }
}
