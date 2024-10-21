<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Warehouse extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar almacenes
        DB::table('warehouses')->insert([
            [
                'id'      => 1,
                'name'    => 'Default Warehouse',
                'city'    => NULL,
                'mobile'  => NULL,
                'zip'     => NULL,
                'email'   => NULL,
                'country' => NULL,
            ],
            [
                'id'      => 2,
                'name'    => 'Default Warehouse',
                'city'    => NULL,
                'mobile'  => NULL,
                'zip'     => NULL,
                'email'   => NULL,
                'country' => NULL,
            ],
        ]);
    }
}
