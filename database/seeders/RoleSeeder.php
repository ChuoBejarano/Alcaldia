<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


/* Modelo de la base de datos */
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'Registros'
        ]);
        
        Role::create([
            'role' => 'Liquidación'
        ]);
        
        Role::create([
            'role' => 'Cobranza'
        ]);

        Role::create([
            'role' => 'Emisión de Documentos'
        ]);

        Role::create([
            'role' => 'Reportes'
        ]);

        Role::create([
            'role' => 'Correcciones'
        ]);

        Role::create([
            'role' => 'Inmuebles'
        ]);

        Role::create([
            'role' => 'Configuraciones'
        ]);
    }
}
