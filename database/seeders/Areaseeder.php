<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Areaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('areas')->insert([
             'area_name'=>'茨城県北エリア',
             ]);
        DB::table('areas')->insert([
             'area_name'=>'茨城県中央エリア',
             ]);
        DB::table('areas')->insert([
             'area_name'=>'茨城県南エリア',
             ]);
        DB::table('areas')->insert([
             'area_name'=>'茨城県西エリア',
             ]);
        DB::table('areas')->insert([
             'area_name'=>'茨城県東エリア',
             ]);     
        //
    }
}
