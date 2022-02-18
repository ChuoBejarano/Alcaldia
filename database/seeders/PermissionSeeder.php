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
            'permission' => 'Vehiculos',
            'role_id' => 2
        ]);

        Permission::create([
            'permission' => 'Cobranza',
            'role_id' => 3
        ]);
        
        Permission::create([
            'permission' => 'Actividad Economica',
            'role_id' => 1
        ]);
        
        Permission::create([
            'permission' => 'Propagando Comercial',
            'role_id' => 2
        ]);

        Permission::create([
            'permission' => 'Cobranza de Aseo',
            'role_id' => 3
        ]);
        Permission::create([
            'permission' => 'Solvencia',
            'role_id' => 4
        ]);
        
        Permission::create([
            'permission' => 'Estados de Cuentas',
            'role_id' => 5
        ]);

        Permission::create([
            'permission' => 'Cambio de Placa',
            'role_id' => 6
        ]);
        
        Permission::create([
            'permission' => 'Avaluo del Inmueble',
            'role_id' => 7
        ]);
        
        Permission::create([
            'permission' => 'Agregar Conceptos',
            'role_id' => 8
        ]);

        Permission::create([
            'permission' => 'Inmuebles',
            'role_id' => 1
        ]);
    }
}
