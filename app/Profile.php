<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'phone',
        'wechat',
        'qq',
        'nike_name',
        'job_title',
        'intro',
        'gender',
        'address_code',
        'detail_address',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('profiles');
    }


}
