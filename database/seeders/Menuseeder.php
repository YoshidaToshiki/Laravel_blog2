<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'body'=>'',
            'image'=>'',
            'recommends'=>'',
            'limited_flg'=>'',
            'limited_time'=>'',
            'take_out_flg'=>'',
             ]);
        //
    }
}
