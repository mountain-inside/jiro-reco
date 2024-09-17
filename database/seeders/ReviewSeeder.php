<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 97.0,
            'comment' => '小ラーメン　800円、ニンニクアブラ。土曜日14:30訪問、並び外に10人、中に7人。30分で着丼。並び方の制限が多いので確認必要。ニンニクアブラのコールをしている人が多かった。
                        　野菜シャキシャキ、麺二郎の中では小麦感強め、肉1cm弱でホロホロ、スープ非乳化、アブラが甘くて臭みがなく味付きではないが好み。
                        　王道な二郎という感じでおいしい',
            'store_id' => 17,
            
        ]);
        
        DB::table('reviews')->insert([
            'foods' => 'ラーメン小　生卵',
            'rating' => 89.0,
            'comment' => '非乳化の二郎で有名ですがしっかり脂も浮いており、とてもバランス良いです。
                        　豚は沈めてられており、なかなか柔らかめでたべれます。
                        　野菜はキャベツがしっかり混ざっております。結構しょっぱめなので、甘脂は必須です。
                        　食券は案内を受けてから購入するように注意書きがあります。',
            'store_id' => 13,
        ]);
        
    }
}
