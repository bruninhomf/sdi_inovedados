<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RequirementTestModule extends Model
{
    protected $fillable = [
        'system_id', 'name'
    ];


    public function insertRequeriments($dados)
    {
        RequirementTestRequirement::create([
            'module_id' => $this->id,
            'description' => $dados['description'],
            'status' => $dados['status']
        ]);
    }
}
