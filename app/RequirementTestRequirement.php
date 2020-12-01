<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RequirementTestRequirement extends Model
{
    protected $fillable = [
        'description', 'status', 
    ];
}