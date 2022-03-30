<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name' =>'admin']);
        $role2=Role::create(['name' =>'user']);

        Permission::create(['name'=>'admin.home']) ->assignRole([$role1]);
        Permission::create(['name'=>'admin.list_users']) ->assignRole([$role1]);
        Permission::create(['name'=>'admin.list_peliculas']) ->syncRoles([$role1,$role2]);
      

    }
}
