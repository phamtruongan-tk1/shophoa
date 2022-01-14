<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'product-index',
            'product-store',
            'product-update',
            'product-delete',
            'user-index',
            'user-store',
            'user-update',
            'user-delete',
            'role-managerment',
        ];

        foreach ($permissions as $per) {
            $permission = new Permission();
            $permission->name = $per;
            $permission->save();
        }
    }
}
