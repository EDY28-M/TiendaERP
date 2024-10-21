<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar roles
        DB::table('roles')->insert([
            [
                'id'          => 1,
                'name'        => 'Owner',
                'label'       => 'Owner',
                'status'      => 1,
                'description' => 'Owner role with full permissions',
            ],
            [
                'id'          => 2,
                'name'        => 'Employee',
                'label'       => 'Employee',
                'status'      => 1,
                'description' => 'Employee role with limited permissions',
            ],
        ]);
    }
}
