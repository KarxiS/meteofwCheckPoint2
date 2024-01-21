<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role1 = Role::create(['name' => 'User']);
        $role1->givePermissionTo('station-edit');
        $role1->givePermissionTo('station-delete');
        $role1->givePermissionTo('station-show');
        $role1->givePermissionTo('station-create');


    }
}
