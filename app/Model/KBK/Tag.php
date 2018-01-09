<?php

namespace App\Model\KBK;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('book_tags');
    }
}
