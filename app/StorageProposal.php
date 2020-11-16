<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageProposal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = [
            'diskspace', 'traffic', 'connections', 'accounts', 'value',
        ];
}
