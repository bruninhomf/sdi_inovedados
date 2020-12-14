<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsecaseTestRequirement extends Model
{
    protected $fillable = [
        'module_id', 'test', 'result',  'status', 
    ];
}
