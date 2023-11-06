<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cafeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafes')->insert([
            'adress'=>'',
            'accesss'=>'',
            'image'=>'',
            'breath'=>'',
            'management_flg'=>'',
            ]);
        //
    }
}
