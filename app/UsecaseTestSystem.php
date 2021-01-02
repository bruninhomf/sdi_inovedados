<?php

namespace App;
use App\UsecaseTestModule;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function modules()
    {
        return $this->hasMany(UsecaseTestModule::class, 'usecase_id', 'id');
    }


    static function getMonthUsecase($month)
    {
        $startdate = Carbon::now();

        $startdate->setDay(1)->setMonth($month);
        $finishDate = $startdate->clone();
        $finishDate->addMonth();

        return 
        UsecaseTestSystem::where('created_at', '>=', $startdate)
        ->where('created_at', '<', $finishDate)
        ->count(); 
    }
}
