<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'super']);

        // manage users
        $usersCreate = Permission::create(['name' => 'users/create']);
        $usersUpdate = Permission::create(['name' => 'users/update']);
        $usersDelete = Permission::create(['name' => 'users/delete']);
        // manage permissions
        $maganePermission = Permission::create(['name' => 'permissions/manage']);

        $role->givePermissionTo($usersCreate);
        $role->givePermissionTo($usersUpdate);
        $role->givePermissionTo($usersDelete);
        $role->givePermissionTo($maganePermission);
    }
}
