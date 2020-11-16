<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostingProposal extends Model
{
    protected $fillable = [
        'diskspace', 'traffic', 'domanins', 'subdomains', 'mailboxes', 'ftp_accounts', 
        'database', 'php_processes', 'value',
    ];
}
