<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        
    static function getMonthVirtual($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        virtualProposal::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
