<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserWarehouse extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar usuarios y sus almacenes correspondientes
        DB::table('user_warehouse')->insert([
            [
                'user_id'      => 1,
                'warehouse_id' => 1,  // Usuario 1 asignado a almacén 1
            ],
            [
                'user_id'      => 2,
                'warehouse_id' => 2,  // Usuario 2 asignado a almacén 2
            ],
        ]);
    }
}
