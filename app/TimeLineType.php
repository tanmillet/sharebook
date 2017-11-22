<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TimeLineType
 * Author Terry Lucas
 * @package App
 */
class TimeLineType extends Model
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
        'tag',
        'status',
    ];

    /**
     * @author Terry Lucas
     * Role constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('tl_type');
    }

}
