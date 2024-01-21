<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'contact-edit',
            'contact-delete',
            'mail-send',
            'contact-show',
            'station-edit',
            'station-delete',
            'station-show',
            'station-create',
            'stationData-show',
            'station-all',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}