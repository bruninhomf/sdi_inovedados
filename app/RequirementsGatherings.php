<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatherings extends Model
{
    protected $fillable = [
        'lr_id', 'project_name', 'version', 'date',
    ];
}
