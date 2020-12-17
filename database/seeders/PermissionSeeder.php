<?php

namespace Database\Seeders;

use App\PermissionGroup;
use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\Calculation\Category;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            'users'=>[
                'read', 
                'create', 
                'edit', 
                'delete', 
            ]
        ];

        foreach($groups as $category => $permissions){

            $group = PermissionGroup::firstOrCreate([ 'name' => $category ]);

            foreach($permissions as $permission){

                Permission::firstOrCreate([
                    'name' => "{$category}.{$permission}",
                    'permission_group_id' => $group->id,
                ]);
            }
        }
    }
}
