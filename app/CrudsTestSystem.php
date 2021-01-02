<?php

namespace App;
use App\CrudsTestModule;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    
    public function modules()
    {
        return $this->hasMany(CrudsTestModule::class, 'cruds_id', 'id');
    }


    static function getMonthCruds($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        CrudsTestSystem::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
