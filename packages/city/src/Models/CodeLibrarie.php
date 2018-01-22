<?php
namespace LucasCity\CityPusher\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * Author Terry Lucas
 * Date 18.1.22
 * Time 15:47
 */
class CodeLibrarie extends Model
{

    //
    public $timestamps = false;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('code_libraries');
    }

}