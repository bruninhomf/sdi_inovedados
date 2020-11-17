<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultingProposal extends Model
{
    protected $fillable = [
        'project', 'version', 'date', 'business_solution_one', 'contact_name', 'client', 
        'address', 'phone', 'cnpj', 'amount', 'first_payment', 'first_payment_date', 
        'second_payment', 'second_payment_date', 'proposal_validity',
    ];
}
