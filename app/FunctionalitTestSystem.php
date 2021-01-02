<?php

namespace App;
use App\FunctionalitTestModule;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function modules()
    {
        return $this->hasMany(FunctionalitTestModule::class, 'functionalit_id', 'id');
    }


    static function getMonthFunctionalit($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        FunctionalitTestSystem::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
