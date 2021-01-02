<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DevelopmentProposal extends Model
{
    protected $fillable = [
        'project', 'version', 'date', 'business_solution_one', 'business_solution_two', 
        'business_solution_three', 'requirements', 'start_development', 'texting_release', 
        'start_test', 'homologation', 'delivery', 'contact_name', 'client', 'address', 
        'phone', 'cnpj', 'amount', 'first_payment', 'first_payment_date', 'second_payment', 
        'second_payment_date', 'proposal_validity', 
    ];

    static function getMonthDevelopment($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        DevelopmentProposal::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
