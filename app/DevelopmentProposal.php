<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevelopmentProposal extends Model
{
    protected $fillable = [
        'project', 'version', 'date', 'business_solution_one', 'business_solution_two', 
        'business_solution_three', 'requirements', 'start_development', 
        'texting_release', 'start_test', 'homologation', 'contact_name', 'client', 
        'address', 'phone', 'cnpj', 'amount', 'first_payment', 'first_payment_date', 
        'second_payment', 'second_payment_date', 'proposal_validity',
    ];
}
