<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatheringsTitles extends Model
{
    protected $fillable = [
        'requirements_id', 'titles', 
    ];
}
