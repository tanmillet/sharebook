<?php

namespace App\Model\KBK;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = FALSE;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('orders');
    }
}
