<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
             'area_name'=>'茨城県北エリア'
            ],
            [
             'area_name'=>'茨城県中央エリア'
            ],
            [
             'area_name'=>'茨城県南エリア'    
            ],
            [
             'area_name'=>'茨城県西エリア'    
            ],
            [
             'area_name'=>'茨城県東エリア'   
            ]
            ]);
    }
}
