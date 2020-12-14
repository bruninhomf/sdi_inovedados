<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudsTestModule extends Model
{
    protected $fillable = [
        'cruds_id', 'name'
    ];


    public function insertRequeriments($dados)
    {
        CrudsTestRequirement::create([
            'module_id'   => $this->id,
            'description' => $dados['description'],
            'register'    => $dados['register'], 
            'view'        => $dados['view'], 
            'edit'        => $dados['edit'], 
            'delete'      => $dados['delete'] 
        ]);
    }
}
