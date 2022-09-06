<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permission for Admin
        Permission::create(['name' => 'Access Admin']);
        //create roles
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleBusiness = Role::create(['name' => 'Business']);
        $roleUser = Role::create(['name' => 'User']);
        $roleAdmin->givePermissionTo(Permission::all());
        //create Admin user and attach that to the Admin role.
        $superAdminUser = User::create([
            'email' => 'SuperAdmin@gmail.com',
            'first_name' => 'Raplex',
            'last_name' => 'SupperAdmin',
            'password' => Hash::make('123456'),
            'user_type' => 'Admin',
        ]);
        $roleAdmin->users()->attach($superAdminUser);
    }
}
