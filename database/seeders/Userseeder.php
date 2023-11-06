<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DataTime;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  
    {
        DB::table('users')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@yaoo.co.jp',
            'age'=>'25',
            'sex'=>'男',
            'image'=>'no image',
            'password'=> Hash::make("yoshidatoshiki")
            ]);
        //
    }
}
