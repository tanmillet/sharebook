<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * @author Terry Lucas
     * @var array
     */
    protected $guarded = [
        'id',
        'updated_at',
        'created_at',
    ];

    /**
     * @author Terry Lucas
     * @var array
     */
    protected $fillable = [
        'name',
        'guard_name',
        'is_type',
        'is_parent',
    ];

    /**
     * @author Terry Lucas
     * Role constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('permissions');
    }

    /**
     * @author Terry Lucas
     * @param $date
     * @return string|static
     */
    public function getIsParentAttribute($is_parent)
    {
        if($is_parent == 'AUTH'){
            return '权限管理';
        }elseif ($is_parent == 'TIMELINE'){
            return '时间轴管理';
        }else{
            return '未设置';
        }
    }

}
