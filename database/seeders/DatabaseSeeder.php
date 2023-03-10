<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
 /**
  * Seed the application's database.
  *
  * @return void
  */
 public function run()
 {
  // Creating an Admin
  $user           = new User();
  $user->name     = 'Super Admin';
  $user->email    = 'super@admin.com';
  $user->password = \bcrypt(1234);
  $user->save();

//   Creating a role for Super Admin
  $role = Role::create([
   'name' => 'Super Admin',
  ]);
//   Creating Permission
  $permission = Permission::create([
   'name' => 'create-admin',
  ]);

// A permission can be assigned to a role using 1 of these methods
  $role->givePermissionTo($permission);
  $permission->assignRole($role);

  $user->assignRole($role);

 }

}