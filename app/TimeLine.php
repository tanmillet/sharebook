<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeLine extends Model
{
    //
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
        'text',
        'type_tag',
        'title',
        'digest',
        'year',
        'month',
    ];

    /**
     * @author Terry Lucas
     * Role constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('timelines');
    }
}
