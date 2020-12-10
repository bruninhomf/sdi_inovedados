<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RequirementTestRequirement extends Model
{
    protected $fillable = [
        'module_id', 'description', 'status', 
    ];
}