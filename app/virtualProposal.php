<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class virtualProposal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = [
            'cpu', 'memory', 'network', 'system', 'ip', 'value',
        ];
}
