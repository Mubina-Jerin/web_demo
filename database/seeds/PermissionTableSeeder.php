<?php

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
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'customers-list',
            'customer-create',
            'customer-edit',
            'customer-delete',
            'provider-list',
            'provider-create',
            'provider-edit',
            'provider-delete',
            'cultivation-list',
            'cultivation-create',
            'cultivation-edit',
            'cultivation-delete',
            'item-list',
            'item-create',
            'item-edit',
            'item-delete',
            'material-list',
            'material-create',
            'material-edit',
            'material-delete',
            'nursery-list',
            'nursery-create',
            'nursery-edit',
            'nursery-delete',
            'nursery_catelog-list',
            'nursery_catelog-create',
            'nursery_catelog-edit',
            'nursery_catelog-delete',
            'orders-list',
            'orders-create',
            'orders-edit',
            'orders-delete',
            'plant_info-list',
            'plant_info-create',
            'plant_info-edit',
            'plant_info-delete',
            'resource-list',
            'resource-create',
            'resource-edit',
            'resource-delete',
            'review-list',
            'review-create',
            'review-edit',
            'review-delete',
            'tracking-list',
            'tracking-create',
            'tracking-edit',
            'tracking-delete'
                     ];
 
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
