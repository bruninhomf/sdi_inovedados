<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudsTestRequirement extends Model
{
    protected $fillable = [
        'module_id', 'description', 'register', 'view', 'edit', 'delete'
    ];
}
