<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ConsultingProposal extends Model
{
    protected $fillable = [
        'project', 'version', 'date', 'business_solution_one', 'contact_name', 'client', 
        'address', 'phone', 'cnpj', 'amount', 'first_payment', 'first_payment_date', 
        'second_payment', 'second_payment_date', 'proposal_validity',
    ];

    static function getMonthCosulting($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        ConsultingProposal::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
