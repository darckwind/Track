<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'des_tipo' => 'sede'
        ]);
        DB::table('tipos')->insert([
            'des_tipo' => 'CEO'
        ]);
        DB::table('tipos')->insert([
            'des_tipo' => 'admin'
        ]);

    }
}
