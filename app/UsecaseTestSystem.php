<?php

namespace App;
use App\UsecaseTestModule;

use Illuminate\Database\Eloquent\Model;

class UsecaseTestSystem extends Model
{
    protected $fillable = [
        'project_name', 
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $usecasetestmodule = UsecaseTestModule::create([
                   'usecase_id'    =>  $this->id,
                   'description'   =>  $modulo['description']
                ]);

                $usecasetestmodule->insertRequeriments($modulo);
            }
        }
    }
}
