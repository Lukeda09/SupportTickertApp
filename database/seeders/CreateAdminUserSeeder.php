<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Any',
            'guard_name' => 'web'
        ]);

        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => 'Admin!'
        ]);
    
        $role = Role::create(['name' => 'admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole(['admin']);
    }
}
