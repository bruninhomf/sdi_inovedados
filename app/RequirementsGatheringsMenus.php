<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequirementsGatheringsMenus extends Model
{
    protected $fillable = [
        'titles_id', 'menu', 
    ];
    public function insertRequeriments($dados)
    {
        RequirementsGatheringsDescriptions::create([
            'menu_id'       => $this->id,
            'description' => $dados['description']
        ]);
    }
}
