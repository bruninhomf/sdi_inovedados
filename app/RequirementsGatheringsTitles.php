<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatheringsTitles extends Model
{
    protected $fillable = [
        'requirements_id', 'titles', 
    ];
    
    public function insertRequeriments($dados)
    {
        RequirementsGatheringsMenus::create([
            'titles_id' => $this->id,
            'menu'      => $dados['menu']
        ]);
    }
    public function menu()
    {
        return $this->hasMany(RequirementsGatheringsMenus::class, 'titles_id', 'id');
    }
}
