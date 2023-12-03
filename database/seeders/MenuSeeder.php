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
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'コーヒー',
                'body'=>'苦みとコクのあるフレンチローストと酸味と甘さのあるフルシティローストのほか、エスプレッソ、アメリカン、カプチーノ、カフェラテなどがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'ソフトドリンク',
                'body'=>'抹茶、ほうじ茶、ジャスミン茶、ウーロン茶などから選べるティーラテ、ロイヤルミルクティー、牛乳、ココアなどとフレッシュなザクロジュース、グアバジュースなどがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'アルコール',
                'body'=>'ビール、カクテル、ウイスキー、サワーと豊富なアルコールがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'デザート',
                'body'=>'口の中で溶けるような味わいの生わらび餅や生わらび餅のパフェ、ドリングがあります。そのほか、コーヒーゼリーとアフォガードがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'アヒージョ',
                'body'=>'エビ、ソーセージ、サバ、チキン、牡蠣の5種類の入れたアヒージョがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => '定食',
                'body'=>'かにクリームコロッケ、サバの味噌煮、カキフライ、アジフライの定食があります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'ホットドッグ',
                'body'=>'ホットドッグの具材とソースを選んで自分好みのホットドッグを作れます。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'パスタ',
                'body'=>'和風スパゲッティ、ミートソーススパゲッティ、ナポリタン、カルボナーラがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 1, //cafe hanamori
                'name' => 'ごはん',
                'body'=>'ローストポークのハヤシライス、アボカドのロコモコライス、ガーリックシュリンプライスがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'1',
                //  ??mited_time'=>'',
                'take_out_flg'=>'1'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'コーヒー',
                'body'=>'通常のコーヒーとウィスキーコーヒー、ココア、ミルクがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'ソフトドリンク',
                'body'=>'オレンジジュースやカルピス、コーラのほかにクリームソーダやレモンスカッシュなどの懐かしいジュースもあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'アルコール',
                'body'=>'ビール、日本酒、ウイスキー水割り、焼酎水割りと渋めのお酒があります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'パフェ',
                'body'=>'チョコレートとバナナの2種類のパフェがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'アイス',
                'body'=>'シンプルなバニラアイスクリームがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'パスタ',
                'body'=>'昔ながらのナポリタンがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'ご飯',
                'body'=>'エビピラフ、チキンピラフ、ドライカレー、カレーライスがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'サンドウィッチ',
                'body'=>'シンプルな玉子サンド、ハムサンド、野菜サンド、ミックスサンドとトーストがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=> 2, //野ばら
                'name' => 'おつまみ',
                'body'=>'サラミ、ハム、ウィンナー、ピーナッツなどの軽食があります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'0'
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'コーヒー',
                'body'=>'ハンドドリップのコーヒーとエスプレッソ、カフェラテ、ミルクラテがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'ソフトドリンク',
                'body'=>'紅茶とココア、日替わりのシロップティーや季節ごとのハーブティーがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'トースト',
                'body'=>'ピザのトーストとチーズトーストがあり、スープ、サラダ付きのプレートを選ぶこともできます。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'ケーキ',
                'body'=>'オシャレなお皿に盛りつけられたチーズケーキがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'パフェ',
                'body'=>'自家製バナナのチョコバナナパフェとプリンパフェがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            [
                'cafe_id'=>3, //プティカフェトロン
                'name' => 'プリン',
                'body'=>'喫茶店で食べるガラスの器にのったプリンがあります。',
                'image'=>'',
                'recommends'=>1,
                'limited_flg'=>'0',
                // 'limited_time'=>'',
                'take_out_flg'=>'1' 
            ],
            // [
            //     'cafe_id'=>4, //カフェ　トロワシャンブル
            //     'name' => 'コーヒー',
            //     'body'=>'コーヒー、紅茶、フルーツジュース、サンドウィッチ、ケーキ',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'0',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'0'    
            // ],
            // [
            //     'cafe_id'=>5, //U-A　モンブラン　カフェ
            //     'name' => 'コーヒー',
            //     'body'=>'モンブラン、ケーキ、ソフトクリーム、レモネード、コーヒー、紅茶、お茶',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'1',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'1'
            // ],
            // [
            //     'cafe_id'=>6, //シーバーズカフェ
            //     'name' => 'コーヒー',
            //     'body'=>'サラダ、軽食、カレーライス、タコライス、ロコモコ、ハーブティー、ほうじ茶、アルコール',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'1',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'1'
            // ],
            // [
            //     'cafe_id'=>7, //カフェ　ポステン
            //     'name' => 'コーヒー',
            //     'body'=>'カレーライス、サンドウィッチ、ケーキ、フレンチトースト、コーヒー、ソフトドリンク',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'1',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'1'
            // ],
            // [
            //     'cafe_id'=>8, //Moff animal cafe
            //     'name' => 'コーヒー',
            //     'body'=>'ソフトドリンク',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'0',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'0'
            // ],
            // [
            //     'cafe_id'=>9, //FURU
            //     'name' => 'コーヒー',
            //     'body'=>'コーヒー、紅茶、ほうじ茶、ソフトドリンク、ケーキ',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'1',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'0'
            // ],
            // [
            //     'cafe_id'=>10, //まるやま千栄堂USAGIYA
            //     'name' => 'コーヒー',
            //     'body'=>'お茶、モンブラン、団子、フルーツまんじゅう',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'1',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'1'    
            // ],
            // [
            //     'cafe_id'=>11, //さくら坂VIVACE
            //     'name' => 'コーヒー',
            //     'body'=>'パスタ、ピザ、ケーキ、コーヒー、紅茶、緑茶、ハーブティー、ソフトドリンク',
            //     'image'=>'',
            //     'recommends'=>1,
            //     'limited_flg'=>'0',
            //     // 'limited_time'=>'',
            //     'take_out_flg'=>'0'
            // ]
        ]);
    }
}
