<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionalitTestRequirement extends Model
{
    protected $fillable = [
        'module_id', 'test', 'result', 'status' 
    ];
}
