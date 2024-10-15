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
            'rating' => 97,
            'comment' => '小ラーメン　800円、ニンニクアブラ。土曜日14:30訪問、並び外に10人、中に7人。30分で着丼。並び方の制限が多いので確認必要。ニンニクアブラのコールをしている人が多かった。
                        　野菜シャキシャキ、麺二郎の中では小麦感強め、肉1cm弱でホロホロ、スープ非乳化、アブラが甘くて臭みがなく味付きではないが好み。
                        　王道な二郎という感じでおいしい',
            'store_id' => 17,
            'user_id' => 1,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994908/ikuta_sho3_jespwo.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => 'ラーメン小',
            'rating' => 89,
            'comment' => '非乳化の二郎で有名ですがしっかり脂も浮いており、とてもバランス良いです。
                        　豚は沈めてられており、なかなか柔らかめでたべれます。
                        　野菜はキャベツがしっかり混ざっております。結構しょっぱめなので、甘脂は必須です。
                        　食券は案内を受けてから購入するように注意書きがあります。',
            'store_id' => 13,
            'user_id' => 1,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994960/nakayama_un2tdh.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 93,
            'comment' => '平日の午前10時40分に到着したところ、並びは16人でした。今日は、11時10分に開店してくれました。11時40分に入店です。
                          小豚、コールニンニクを注文しました。カウンターの横だったので店主さんの麺上げを間近で見ることが出来ました。
                          芸術的ですね。相変わらず、タワーのように盛られた野菜、トロトロの豚、そして濃厚すぎるスープが最高です。
                          スープを楽しむためには、ニンニクがいらないことに気づきました。そのままで頼む方が多いのも納得です。
                          次は、そのままで注文したいです。
                          どろどろのスープとムチムチの麺の相性が最高です。やっぱり、旨かったです。
                          何度も通いたいです。ご馳走さまでした。',
            'store_id' => 29,
            'user_id' => 3,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994909/hibari_ykvljw.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小豚ラーメン',
            'rating' => 94,
            'comment' => '・店内は綺麗（二郎にしては）・ルールはあるが全然うるさくない・並びは凄いが流石の回転の速さ
                          新しいの二郎ということで店員も並び客も若い。店内に緊張感が走る二郎は求めてないので、
                          提供を早くするために皆でルールをまもる。それぐらいが丁度いい
                          豚がすごいと前評判を聞いていったが正直そこまでかなとそれよりも太麺とスープとの相性が最高だった。',
            'store_id' => 17,
            'user_id' => 1,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994901/ikuta_shobuta_q0xffy.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 90,
            'comment' => 'このところ猛暑と並びのエグさてで2回断念した本店に意を決して向かった
                          相変わらずエグい並び。しかし、秋の空気は背中を押してくれる。1時間30分並んでたどり着いた本日の一杯は
                          小ラーメン麺少なめヤサイアブラ総帥のお手によるもの
                          いや、これが値上がりしたとはいえ700円で食べられることに頭が下がります
                          久しぶりすぎて何だか余力を残し完食
                          麺普通で行けたかもなんて思いが過ったけど、結局これくらいが丁度良い
                          ごちそうさまでした',
            'store_id' => 18,
            'user_id' => 1,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994954/mitajiro-ramen36-scaled_pav2rp.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン　冷やし',
            'rating' => 87,
            'comment' => '一度は食べてみたいと思っていた冷やし。
                          日曜日の開店70分前に到着もセカロで、着丼まで90分ほど待った。
                          頂いたものは小ラーメン(¥800)+冷やし(¥100)で、コールはヤサイニンニク。
                          汗をかかずに頂けるラーメンで、旨味もしっかりとある。冷たいラーメンでもこの完成度は素晴らしい。
                          個人的には普通のラーメンのが好みの味だが、たまにはこういうのも悪くないね。暑い時期はとても食べやすい。',
            'store_id' => 17,
            'user_id' => 2,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994910/ikuta_hiyasi_ndmk4g.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン　ねぎ',
            'rating' => 94,
            'comment' => '小ラーメン+ネギ
                          めちゃくちゃうまい！！
                          フレッシュ濃厚スープというだけあってスープがめちゃくちゃうまい！トッピングのネギも異常なほどシャキシャキなネギにごま油が和えてありネギ単体でめちゃくちゃ美味いです笑
                          さらにニンニクをガッツリ加えて食べるともうやばいです、、。
                          また来ます！',
            'store_id' => 38,
            'user_id' => 1,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994969/yaenn_u5xuko.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 83,
            'comment' => 'ひっさびさの川崎二郎。
                          平日の夜の会だったのであまり並ばないかと思いましたが、開店30分前くらいには行列が、、、
                          無事3人目で並べたので開店すぐに座れました！
                          小ラーメン、野菜・アブラ・ニンニクをオーダー。
                          結構微乳化な感じのイメージでしたが、思ったよりキレのある味でめっちゃいい感じでした！
                          うまい、、、そして店の雰囲気も含めて優しい二郎でした。',
            'store_id' => 14,
            'user_id' => 3,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994936/kawasaki_bwa2zi.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 90,
            'comment' => '金曜の夜に来店。並びは20人ほどで、約1時間で着丼。小ラーメン、硬めを注文。コールは全マシ。
                          開店当初以来2度目でしたが、スープがとても美味しくなっていると感じました。
                          醤油がキレキレで、美味しかったです。
                          野菜はシャキ気味で、アブラとスープを纏わせて食べると美味しかったです。
                          卓上カエシもあるので、追加で野菜にかけることもできて良かったです。
                          豚はホロ気味で味染みも良かったです。
                          麺はもう少し小麦の風味を感じられると良かったなと思いました。',
            'store_id' => 17,
            'user_id' => 3,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994902/ikuta_sho2_ti8cnr.jpg',
        ]);
        
        DB::table('reviews')->insert([
            'foods' => '小ラーメン',
            'rating' => 89,
            'comment' => '平日昼の13時半頃訪問、20分ほどで店内へ。
                          小ラーメン（¥800）と生卵（¥50）を注文。
                          コールはヤサイニンニクアブラ。
                          お目当ての冷やしはもう終わっていたため、普通のラーメン。オープン直後に来て以来、久しぶりの訪問。
                          レベルアップしていて驚きました。麺が太め、ゴワワシで、スープは非乳化め。直系の中でもかなり好み。
                          また来ます、ご馳走様でした！！！',
            'store_id' => 17,
            'user_id' => 2,
            'photo_id' => 'https://res.cloudinary.com/duyuwjhzj/image/upload/v1728994909/ikuta_sho_kezcwm.jpg',
        ]);
        
        
        
    }
}
