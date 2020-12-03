<?php

namespace App;
use App\RequirementTestModule;

use Illuminate\Database\Eloquent\Model;

class RequirementTestSystem extends Model
{
    protected $fillable = [
        'name_system', 
    ];
    public function inserirmodulo($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                RequirementTestModule::create([
                   'system_id' => $this->id,
                   'name'  => $modulo['name'],
                   'description'  => $modulo['description'],
                   'status' => $modulo['status'],
                ]);
            }
        }
    }
}