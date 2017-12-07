<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'project_name',
        'project_tag',
        'project_type',
        'project_status',
        'project_digest',
        'project_context',
        'project_milestone',
    ];

    /**
     * @author Terry Lucas
     * Role constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable('projects');
    }
}
