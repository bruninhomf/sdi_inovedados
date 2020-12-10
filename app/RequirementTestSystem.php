<?php

namespace App;
use App\RequirementTestModule;

use Illuminate\Database\Eloquent\Model;

class RequirementTestSystem extends Model
{
    protected $fillable = [
        'name_system', 
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $requirementTestModule = RequirementTestModule::create([
                   'system_id'    =>  $this->id,
                   'name'         =>  $modulo['name']
                ]);

                $requirementTestModule->insertRequeriments($modulo);
            }
        }
    }
}