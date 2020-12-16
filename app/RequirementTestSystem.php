<?php

namespace App;
use App\RequirementTestModule;

use Illuminate\Database\Eloquent\Model;

class RequirementTestSystem extends Model
{
    protected $fillable = [
        'project_name', 
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $requirementTestModule = RequirementTestModule::create([
                   'requirement_id'    =>  $this->id,
                   'name'              =>  $modulo['name']
                ]);

                $requirementTestModule->insertRequeriments($modulo);
            }
        }
    }
}