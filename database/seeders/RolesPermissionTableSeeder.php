<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role; 
use App\Models\Permission; 


class RolesPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $adminRole = Role::where("name", "admin")->first();
        $staffRole = Role::where("name","staff")->first();

        $permissions= Permission::all();


        //Admin have all permission
        $adminRole->permission()->sync($permissions); //Sync la dong bo thi admin role se co tat ca quyen all

        //Staff have some permissions (nhan vien chi co mot vai quyen)
        $staffPermissions =$permissions->whereIn("name",[
            
            "manage_products",
            "manage_contacts"
        ]);

        $staffRole->permission()->sync($staffPermissions);


    }
}
