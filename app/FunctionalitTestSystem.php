<?php

namespace App;
use App\FunctionalitTestModule;

use Illuminate\Database\Eloquent\Model;

class FunctionalitTestSystem extends Model
{
    protected $fillable = [
        'project_name', 
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $functionalittestmodule = FunctionalitTestModule::create([
                   'functionalit_id'    =>  $this->id,
                   'description'        =>  $modulo['description']
                ]);

                $functionalittestmodule->insertRequeriments($modulo);
            }
        }
    }
}
