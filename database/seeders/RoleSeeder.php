<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'System Administrator',
                'permissions' => json_encode(['all'])
            ],
            [
                'name' => 'Supplier',
                'description' => 'Raw Material Supplier',
                'permissions' => json_encode(['supply_management', 'order_view'])
            ],
            [
                'name' => 'Distributor',
                'description' => 'Product Distributor',
                'permissions' => json_encode(['distribution_management', 'inventory_view'])
            ],
            [
                'name' => 'Retailer',
                'description' => 'Product Retailer',
                'permissions' => json_encode(['retail_management', 'order_management'])
            ],
            [
                'name' => 'Customer',
                'description' => 'End Customer',
                'permissions' => json_encode(['order_create', 'profile_manage'])
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
