<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'descripcion' => 'En Origen'
        ]);
        DB::table('estados')->insert([
            'descripcion' => 'Enviado'
        ]);
        DB::table('estados')->insert([
            'descripcion' => 'En Camino'
        ]);
        DB::table('estados')->insert([
            'descripcion' => 'Recepcionado en destino'
        ]);
    }
}
