<?php

use Illuminate\Database\Seeder;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class JhonatanPermissionInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user admin
        $useradmin = User::where('email', 'admin@admin.com')->first();
        if (!$useradmin) {
            $useradmin = User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
            ]);
        };

        //rol admin
        $roladmin = Role::where('slug', 'admin')->first();
        if (!$roladmin) {
            $roladmin = Role::create([
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Administrador',
                'full-access' => 'yes',
            ]);
        }
        
        //tabla role user
        $useradmin->roles()->sync([$roladmin->id]);

        //permission
        $permission_all = [];

        //permission role
        $permission = Permission::where('slug', 'role.index')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'List Role',
                'slug' => 'role.index',
                'description' => 'A user can list role',
            ]);
        }

        $permission_all[] = $permission->id;


        //permission show role
        $permission = Permission::where('slug', 'role.show')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Show Role',
                'slug' => 'role.show',
                'description' => 'A user can see a role',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission create role
        $permission = Permission::where('slug', 'role.create')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Create Role',
                'slug' => 'role.create',
                'description' => 'A user can create a role',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission edit role
        $permission = Permission::where('slug', 'role.edit')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Edit Role',
                'slug' => 'role.edit',
                'description' => 'A user can edit a role',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission destroy role
        $permission = Permission::where('slug', 'role.destroy')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Destroy Role',
                'slug' => 'role.destroy',
                'description' => 'A user can destroy a role',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission user
        $permission = Permission::where('slug', 'user.index')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'List User',
                'slug' => 'user.index',
                'description' => 'A user can list user',
            ]);
        }

        $permission_all[] = $permission->id;


        //permission show user
        $permission = Permission::where('slug', 'user.show')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Show User',
                'slug' => 'user.show',
                'description' => 'A user can see a user',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission create user
        /*$permission = Permission::where('slug', 'user.create')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Create User',
                'slug' => 'user.create',
                'description' => 'A user can create a user',
            ]);
        }*/

        $permission_all[] = $permission->id;

        //permission edit user
        $permission = Permission::where('slug', 'user.edit')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Edit User',
                'slug' => 'user.edit',
                'description' => 'A user can edit a user',
            ]);
        }

        $permission_all[] = $permission->id;

        //permission destroy user
        $permission = Permission::where('slug', 'user.destroy')->first();
        if (!$permission) {
            $permission = Permission::create([
                'name' => 'Destroy User',
                'slug' => 'user.destroy',
                'description' => 'A user can destroy a user',
            ]);
        }

        $permission_all[] = $permission->id;
        

        //tabla permission rol
        $roladmin->permissions()->sync($permission_all);




        
    }
}
