<?php

namespace App;
use App\RequirementsGatheringsTitles;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatherings extends Model
{
    protected $fillable = [
        'lr_id', 'project_name', 'version', 'date',
    ];
    public function insertModules($dados) {
        if($dados && isset($dados['modulos'])) {
            foreach($dados['modulos'] as $modulo) {
                $requirementsgatheringstitles = RequirementsGatheringsTitles::create([
                   'requirements_id'    =>  $this->id,
                   'titles'             =>  $modulo['titles']
                ]);

                $requirementsgatheringstitles->insertRequeriments($modulo);
            }
        }
    }
}
