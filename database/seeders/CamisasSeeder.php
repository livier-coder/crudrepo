<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CamisasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('camisas')->insert([
            'talla'=>'M',
            'precio'=> 1200.01,
            'marca' => 'Nike',
            'no_unidades'=> 10,
            'created_at' => now(),
            'updated_at'=> now(),
        ]);
        //
    }
}
