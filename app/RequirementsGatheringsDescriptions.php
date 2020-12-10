<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatheringsDescriptions extends Model
{
    protected $fillable = [
        'menu_id', 'description', 
    ];
}
