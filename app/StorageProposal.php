<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

        static function getMonthStorage($month)
        {
            $startdate = Carbon::now();
    
            $startdate->setDay(1)->setMonth($month);
            $finishDate = $startdate->clone();
            $finishDate->addMonth();
    
            return 
            StorageProposal::where('created_at', '>=', $startdate)
            ->where('created_at', '<', $finishDate)
            ->count(); 
        }
}
