<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\AccountSetting\App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['Can Add Employee', 'Can Edit Employee', 'Can Delete Employee'
       ];
        for ($i = 0; $i < count($permissions); $i++) {
            $permission = new Permission;
            if (Permission::where('id', $i)->exists()) {
                $permission->id = $i + 1;
            } else {
                $permission->id = $i;
            }
            $permission->permission = $permissions[$i];
            $permission->save();

        }
    }
}
