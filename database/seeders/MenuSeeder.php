<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'cafe_id'=>'1', //cafe hanamori
                'body'=>'コーヒー、ソフトドリンク、アルコール、デザート（わらび餅、パフェ、コーヒーゼリー）、アヒージョ、定食、ホットドック、パスタ',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=>'2', //野ばら
                'body'=>'コーヒー、ソフトドリンク、アルコール、パフェ、アイス、パスタ、サンドウィッチ、おつまみ',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=>'3', //プティカフェトロン
                'body'=>'コーヒー、ソフトドリンク、トースト、ケーキ、パフェ、プリン',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>'4', //カフェ　トロワシャンブル
                'body'=>'コーヒー、紅茶、フルーツジュース、サンドウィッチ、ケーキ',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'    
            ],
            [
                'cafe_id'=>'5', //U-A　モンブラン　カフェ
                'body'=>'モンブラン、ケーキ、ソフトクリーム、レモネード、コーヒー、紅茶、お茶',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=>'6', //シーバーズカフェ
                'body'=>'サラダ、軽食、カレーライス、タコライス、ロコモコ、ハーブティー、ほうじ茶、アルコール',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=>'7', //カフェ　ポステン
                'body'=>'カレーライス、サンドウィッチ、ケーキ、フレンチトースト、コーヒー、ソフトドリンク',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=>'8', //Moff animal cafe
                'body'=>'ソフトドリンク',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=>'9', //FURU
                'body'=>'コーヒー、紅茶、ほうじ茶、ソフトドリンク、ケーキ',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=>'10', //まるやま千栄堂USAGIYA
                'body'=>'お茶、モンブラン、団子、フルーツまんじゅう',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                // 'limited_time'=>'',
                'take_out_flg'=>'1'    
            ],
            [
                'cafe_id'=>'11', //さくら坂VIVACE
                'body'=>'パスタ、ピザ、ケーキ、コーヒー、紅茶、緑茶、ハーブティー、ソフトドリンク',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ]
        ]);
    }
}
