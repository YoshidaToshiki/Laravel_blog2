<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DataTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  
    {
        DB::table('users')->insert([
            'cafe_id' => 1,
            'name' => Str::random(10),
            'email'=> 'test@yaoo.co.jp',
            'age'=>'25',
            'sex'=> 0,
            'image'=>'no image',
            'password'=> Hash::make("yoshidatoshiki")
            ]);
        //
    }
}
