<?php

namespace App;

use Carbon\Carbon;
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
        'ymd',
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

    /**
     * @author Terry Lucas
     * @param $date
     * @return string|static
     */
    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date);
        }
        return Carbon::parse($date)->diffForHumans();
    }
}
