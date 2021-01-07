<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementTestModule extends Model
{
    protected $fillable = [
        'requirement_id', 'name'
    ];

    public function insertRequeriments($dados)
    {
        RequirementTestRequirement::create([
            'module_id' => $this->id,
            'description' => $dados['description'],
            'status' => $dados['status']
        ]);
    }

    public function requirements()
    {
        return $this->hasMany(RequirementTestRequirement::class, 'module_id', 'id');
    }
}
