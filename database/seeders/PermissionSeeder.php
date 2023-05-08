<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions =[
            'add_user',
            'edit_user',
            'show_user',
            'delete_user',
        ];
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name'=>$permission],[
                'name'=>$permission,
                'guard_name'=>'admin'
            ]);
            # code...
        }
    }
}