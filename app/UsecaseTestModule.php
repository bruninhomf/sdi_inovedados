<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsecaseTestModule extends Model
{
    protected $fillable = [
        'usecase_id', 'description'
    ];


    public function insertRequeriments($dados)
    {
        UsecaseTestRequirement::create([
            'module_id' => $this->id,
            'test'      => $dados['test'],
            'result'    => $dados['result'],
            'status'    => $dados['status']
        ]);
    }

    public function requirements()
    {
        return $this->hasMany(UsecaseTestRequirement::class, 'module_id', 'id');
    }
}
