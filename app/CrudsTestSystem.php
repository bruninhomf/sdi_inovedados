<?php

namespace App;
use App\CrudsTestModule;

use Illuminate\Database\Eloquent\Model;

class CrudsTestSystem extends Model
{
    protected $fillable = [
        'project_name', 
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $crudstestmodule = CrudsTestModule::create([
                   'cruds_id'    =>  $this->id,
                   'name'         =>  $modulo['name']
                   
                ]);

                $crudstestmodule->insertRequeriments($modulo);
            }
        }
    }
}
