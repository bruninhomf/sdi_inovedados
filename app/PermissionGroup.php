<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    protected $fillable = [ 'name' ];
    
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function toCreate()
    {
        return $this->hasOne(Permission::class)->where('name', 'like', '%.create');
    }

    public function toRead()
    {
        return $this->hasOne(Permission::class)->where('name', 'like', '%.read');
    }

    public function toEdit()
    {
        return $this->hasOne(Permission::class)->where('name', 'like', '%.edit');
    }

    public function toDelete()
    {
        return $this->hasOne(Permission::class)->where('name', 'like', '%.delete');
    }

    public function toAdditional()
    {
        return $this->hasOne(Permission::class)->where('name', 'like', '%.additional');
    }
}
