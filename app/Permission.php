<?php

namespace App;

use Spatie\Permission\Models\Permission as BasePermission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends BasePermission
{
    protected $fillable = [
        'name', 'permission_group_id'
    ];
}
