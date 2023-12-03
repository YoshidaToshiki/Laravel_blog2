<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafes')->insert([
            [
            'area_id' => 2,
            'name'=>'cafe hanamori',
            'address'=>'茨城県ひたちなか市高場1180‐3',
            'access'=>'佐和駅から車で10分',
            'image'=>'',
            'breadth'=>30,
            'management_flg'=>'1'
            ],
            [
            'area_id' => 2,
            'name'=>'野ばら',
            'address'=>'茨城県那珂郡東海村27',
            'access'=>'東海駅から車で10分',
            'image'=>'',
            'breadth'=> 15,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 2,
            'name'=>'プティカフェトロン',
            'address'=>'茨城県水戸市千波町1438‐2',
            'access'=>'水戸駅から車で10分',
            'image'=>'',
            'breadth'=> 15,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 2,
            'name'=>'カフェ　トロワシャンブル',
            'address'=>'茨城県水戸市城南2丁目5‐8',
            'access'=>'水戸駅から徒歩10分',
            'image'=>'',
            'breadth'=> 20,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 2,
            'name'=>'U‐Aモンブランカフェ',
            'address'=>'茨城県笠間市稲田4260‐1',
            'access'=>'稲田駅から車で3分',
            'image'=>'',
            'breadth'=> 20,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 1,
            'name'=>'シーバーズカフェ',
            'address'=>'茨城県日立市旭町1丁目3‐20',
            'access'=>'日立駅から徒歩1分',
            'image'=>'',
            'breadth'=> 20,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 3,
            'name'=>'カフェ・ポステン',
            'address'=>'茨城県つくば市北条183',
            'access'=>'つくば駅から車で20分',
            'image'=>'',
            'breadth'=> 20,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 3,
            'name'=>'Moff animal cafe イーアスつくば',
            'address'=>'茨城県つくば市研究学園5丁目19',
            'access'=>'研究学園駅から徒歩10分',
            'image'=>'',
            'breadth'=> 30,
            'management_flg'=>'1'
            ],
            [
            'area_id' => 4,
            'name'=>'FURU',
            'address'=>'茨城県常総市沖新田町532',
            'access'=>'中妻駅から車で4分',
            'image'=>'',
            'breadth'=> 15,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 4,
            'name'=>'まるやま千栄堂USAGIYA',
            'address'=>'茨城県守谷市中央2丁目9‐2',
            'access'=>'守谷駅から徒歩5分',
            'image'=>'',
            'breadth'=> 10,
            'management_flg'=>'0'
            ],
            [
            'area_id' => 4,
            'name'=>'さくら坂VIVACE',
            'address'=>'茨城県守谷市板戸井1751‐1',
            'access'=>'守谷駅から車で12分',
            'image'=>'',
            'breadth'=> 40,
            'management_flg'=>'0'
            ]
            ]);
        //
    }
}
