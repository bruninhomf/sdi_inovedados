<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionalitTestModule extends Model
{
    protected $fillable = [
        'functionalit_id', 'description'
    ];


    public function insertRequeriments($dados)
    {
        FunctionalitTestRequirement::create([
            'module_id' => $this->id,
            'test'      => $dados['test'],
            'result'    => $dados['result'], 
            'status'    => $dados['status']
        ]);
    }
}
