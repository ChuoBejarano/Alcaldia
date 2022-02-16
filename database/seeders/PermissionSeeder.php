<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/* Modelo de la base de datos */
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'permission' => 'Registrar',
            'role_id' => 1
        ]);
        
        Permission::create([
            'permission' => 'bbbb',
            'role_id' => 2
        ]);

        Permission::create([
            'permission' => 'cccc',
            'role_id' => 3
        ]);
        
        Permission::create([
            'permission' => 'dddd',
            'role_id' => 1
        ]);
        
        Permission::create([
            'permission' => 'ffff',
            'role_id' => 2
        ]);

        Permission::create([
            'permission' => 'gggg',
            'role_id' => 3
        ]);
        Permission::create([
            'permission' => 'aaaa',
            'role_id' => 4
        ]);
        
        Permission::create([
            'permission' => 'bbbb',
            'role_id' => 5
        ]);

        Permission::create([
            'permission' => 'cccc',
            'role_id' => 6
        ]);
        
        Permission::create([
            'permission' => 'dddd',
            'role_id' => 7
        ]);
        
        Permission::create([
            'permission' => 'ffff',
            'role_id' => 8
        ]);

        Permission::create([
            'permission' => 'gggg',
            'role_id' => 1
        ]);
    }
}
