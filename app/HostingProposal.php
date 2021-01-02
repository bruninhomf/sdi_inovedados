<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class HostingProposal extends Model
{
    protected $fillable = [
        'diskspace', 'traffic', 'domanins', 'subdomains', 'mailboxes', 'ftp_accounts', 
        'database', 'php_processes', 'value',
    ];

    static function getMonthHosting($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        HostingProposal::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
