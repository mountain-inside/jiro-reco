<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　札幌店',
            'adress' => '〒060-0806 北海道札幌市北区北六条西8-8-1',
            'opening_hours' => '＜平日＞11:00~14:00 / 17:00~20:30＜土＞11:00~15:00',
            'closed' => '日曜日、祝日',
            'latitude' => '43.067504',
            'longitude' => '141.344183',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '日本最北端の直系二郎。味噌ラーメンなどの多くの種類のラーメンがある',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　仙台店',
            'adress' => '〒980-0822 宮城県仙台市青葉区立町2−8',
            'opening_hours' => '＜平日、土＞11:30～14:30／17:00～21:00＜日＞11:30~19:30',
            'closed' => '無休',
            'latitude' => '38.261701',
            'longitude' => '140.866177',
            'soup_id' => 1,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '隣にカレー屋さんがある。年中無休、日曜日は通し営業を行なっている',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　会津若松駅前店',
            'adress' => '〒965-0041 福島県会津若松市駅前町6−31',
            'opening_hours' => '＜平日＞11:00～14:00／17:00～21:00＜土曜・第2・4日曜・祝日＞11:00～15:00',
            'closed' => '月曜日・第1・3・5日曜・祝日(不定休)',
            'latitude' => '37.506625',
            'longitude' => '139.931444',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => 'エビ味つけ麺が人気で、店員さんが親切で、店内が広々としているのが特徴。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　新潟店',
            'adress' => '〒950-0088 新潟県新潟市中央区万代5丁目2-8',
            'opening_hours' => '＜平日＞11:00-14:00／16:30-21:00＜土・日＞10:00-15:30',
            'closed' => '月曜日・木曜日',
            'latitude' => '37.917239',
            'longitude' => '139.060056',
            'soup_id' => 2,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '日本海側にある唯一の直系次郎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　ひたちなか店',
            'adress' => '〒321-0063 茨城県ひたちなか市田彦1648-4',
            'opening_hours' => '＜平日＞11:00〜14:30／17:30〜21:00＜土・祝＞10:00〜16:00 (材料なくなり次第閉店)',
            'closed' => '日曜日',
            'latitude' => '36.40919',
            'longitude' => '140.515317',
            'soup_id' => 2,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '茨城唯一の直系二郎。はんぺんアブラという角煮のように大きいチャーシューのトッピングが有名。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　栃木街道店',
            'adress' => '〒321-0225 栃木県下都賀郡壬生町本丸2丁目15−67',
            'opening_hours' => '＜月～金＞11:30～14:45／18:00～21:00＜土＞11:30～16:00',
            'closed' => '日曜日、祝日(不定休)',
            'latitude' => '36.422882',
            'longitude' => '139.794894',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ',
            'ticket_system' => '食券後買',
            'comment' => '岩下の新生姜などの栃木ならではのトッピングが特徴。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　前橋千代田町店',
            'adress' => '〒371-0022 群馬県前橋市千代田町4丁目12−3',
            'opening_hours' => '10:30〜14:30／17:00〜20:00※材料なくなり次第閉店',
            'closed' => '月曜日',
            'latitude' => '36.392477',
            'longitude' => '139.071047',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ',
            'ticket_system' => '食券後買',
            'comment' => '乳化スープだったのが非乳化に変わった群馬にある直系二郎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　千葉店',
            'adress' => '〒271-0091 千葉県千葉市中央区中央1丁目7-8',
            'opening_hours' => '＜月～金＞17:30~21:30＜土＞11:00~14:30',
            'closed' => '日曜日、祝日不定休',
            'latitude' => '35.610555',
            'longitude' => '140.123601',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '二郎では珍しい味噌ラーメンが有名なお店',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　松戸駅前店',
            'adress' => '〒271-0091 千葉県松戸市本町17−9',
            'opening_hours' => '＜月～金＞17:30~21:30＜土＞11:00~14:30',
            'closed' => '日曜日・祝日(不定休)',
            'latitude' => '35.785964',
            'longitude' => '139.899356',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '直系二郎の中でも人気の高い店舗。スープが乳化しているのが特徴。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　京成大久保店',
            'adress' => '〒274-0072 千葉県船橋市三山2-1-11',
            'opening_hours' => '11:00〜15:00',
            'closed' => '日曜日・祝日',
            'latitude' => '35.691506',
            'longitude' => '140.049633',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ',
            'ticket_system' => '食券後買',
            'comment' => '味噌ラーメン・味噌つけ麺が人気の店舗。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　柏店',
            'adress' => '〒277-0872 千葉県柏市十余二249-5',
            'opening_hours' => '＜月〜金、土・祝＞11:00〜15:00ごろ／17:30〜21:30ごろ',
            'closed' => '日曜日',
            'latitude' => '35.882205',
            'longitude' => '139.959199',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ',
            'ticket_system' => '食券先買',
            'comment' => '2023年1月にラーメン二郎守谷店から移転してきた店舗。二郎標準より柔らかめの麺が特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　横浜関内店',
            'adress' => '〒231-0033　神奈川県横浜市中区長者町6-94',
            'opening_hours' => '11:00〜14:30／17:00〜21:00',
            'closed' => '水曜日',
            'latitude' => '35.442006',
            'longitude' => '139.630675',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・ベニ・アレ（数量限定日替わりトッピング）',
            'ticket_system' => '食券後買',
            'comment' => '直系二郎随一の人気店。汁なしが有名な店舗で普通のラーメンより汁なしを頼む人が多い。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　中山駅前店',
            'adress' => '〒226-0014 神奈川県横浜市緑区台村町309−1',
            'opening_hours' => '11:00〜14:00／18:00〜21:30',
            'closed' => '木曜日',
            'latitude' => '35.513185',
            'longitude' => '139.538476',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '最近、関内店に匹敵する並びを形成する人気店。コンスタントにさまざまな限定メニューを提供している。',
            'rating_total' => 89,
            'rating_count' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　京急川崎店',
            'adress' => '〒210-0001 神奈川県川崎市川崎区本町2-10-1',
            'opening_hours' => '＜平日＞11:00～14:00／18:00～22:00＜土＞11:00～16:00',
            'closed' => '日曜日・祝日',
            'latitude' => '35.534954',
            'longitude' => '139.705238 ',
            'soup_id' => 2,
            'noodle_id' => 1,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '二郎の中でもかなり細めの麺が特徴。スープも甘めでさっぱりしており食べやすい。',
            'rating_total' => 83,
            'rating_count' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　相模大野店',
            'adress' => '〒252-0303 神奈川県相模原市南区相模大野6-14-9 MKプラザⅡ 103号',
            'opening_hours' => '＜平日＞10:30〜14:00／17:30〜21:00＜土・日＞10:30〜15:00',
            'closed' => '月曜日、日曜日・祝日は不定休',
            'latitude' => '35.529961',
            'longitude' => '139.43293',
            'soup_id' => 2,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => 'スモジの愛称で親しまれる店舗。「和ッカレー」や「賄い(汁なし)」、「お茶漬け～麺」などユニークなメニューが特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　湘南藤沢店',
            'adress' => '〒251-0053 神奈川県藤沢市本町1丁目10-14',
            'opening_hours' => '＜月・水～日＞11:00〜14:30／17:00〜20:00',
            'closed' => '火曜日',
            'latitude' => '35.343065',
            'longitude' => '139.482256',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '夏季限定のつけ麺が人気の店舗。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　生田駅前店',
            'adress' => '〒214-0038　神奈川県川崎市多摩区生田8-1-15',
            'opening_hours' => '11:00～15:00／18:00～21:00',
            'closed' => '水曜日',
            'latitude' => '35.615488',
            'longitude' => '139.545443',
            'soup_id' => 2,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '2023年5月オープンの新店舗。キリッと醤油の効いた非乳化スープと極太ワシワシ麺が特徴の店舗',
            'rating_total' => 457,
            'rating_count' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　三田本店',
            'adress' => '〒108-0073 東京都港区三田2-16-4',
            'opening_hours' => '8:30～15:00／17:00～20:00',
            'closed' => '日曜日・祝日',
            'latitude' => '35.64806 ',
            'longitude' => '139.741647',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '1968年創業、ラーメン二郎の本店。「ラーメン二郎」の第一号店舗であり、歴史の草分け的存在。',
            'rating_total' => 90,
            'rating_count' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　神田神保町店',
            'adress' => '〒101-0051 東京都千代田区神田神保町1-21-4',
            'opening_hours' => '＜月〜土＞11:00〜17:30',
            'closed' => '日曜日・祝日',
            'latitude' => '35.695182',
            'longitude' => '139.760831',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '都内でも常に行列の人気の店舗で、量が多いことで知られる。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　池袋東口店',
            'adress' => '〒171-0022 東京都豊島区南池袋2-27-17',
            'opening_hours' => '＜平日＞11時 ～ 16時＜土日祝＞10時 ～ 16時',
            'closed' => '月曜日',
            'latitude' => '35.728285',
            'longitude' => '139.713868',
            'soup_id' => 1,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '歯応えのある硬めの太麺が特徴。コールの「アブラ」は黒アブラという焦がした感じのアブラ。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　新宿歌舞伎町店',
            'adress' => '〒160-0021 東京都新宿区歌舞伎町2-37-5 日新ビル1階',
            'opening_hours' => '11:30～17:00／19:00～2:30　※金・土・祝前日は2:00まで',
            'closed' => '水曜日、不定休あり',
            'latitude' => '35.696129',
            'longitude' => '139.701945',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '深夜までやっている店舗。甘めのスープが特徴。二郎標準より盛りが抑えめ。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　新宿小滝橋通り店',
            'adress' => '〒160-0023 東京都新宿区西新宿7-5-5',
            'opening_hours' => '＜月～土＞11:00～23:00＜日・祝＞11:00～22:00　※月が祝日の場合は日曜23:00',
            'closed' => '元日',
            'latitude' => '35.696326',
            'longitude' => '139.69851',
            'soup_id' => 1,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '学割ラーメンがある店舗。二郎標準より盛りが抑えめ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　上野毛店',
            'adress' => '〒158-0093 東京都世田谷区上野毛1-26-16',
            'opening_hours' => '＜月〜金＞11:00〜14:15／17:45〜22:00＜土＞11:00〜14:30',
            'closed' => '日曜日、祝日',
            'latitude' => '35.612435',
            'longitude' => '139.639003',
            'soup_id' => 2,
            'noodle_id' => 1,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '麺の硬さで「麺固め」や「バリカタ」などを選択することのできる二郎。二郎標準よりだいぶ細めの麺が特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　環七新新代田店',
            'adress' => '〒155-0033 東京都世田谷区代田5-29-5',
            'opening_hours' => '11:00～15:00',
            'closed' => '不定休',
            'latitude' => '35.661906',
            'longitude' => '139.66044',
            'soup_id' => 2,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '醤油の効いた赤濁微乳化が特徴。毎日営業だが昼のみの営業',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　目黒店',
            'adress' => '〒153-0063 東京都目黒区目黒3-7-2',
            'opening_hours' => '11:00〜16:00／18:00〜22:00',
            'closed' => '水曜日',
            'latitude' => '35.63421',
            'longitude' => '139.707103',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '全店舗の中で一番安い小ラーメン一杯600円で提供している。二郎標準より盛りが抑えめ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　品川店',
            'adress' => '〒140-0001 東京都品川区北品川1-18-5',
            'opening_hours' => '＜月～金＞11:00～14:30／17:00～21:00(ラストオーダー20:30)＜土＞11:00～14:00',
            'closed' => '日曜日、祝日',
            'latitude' => '35.62391',
            'longitude' => '139.743044',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => 'ライトなスープが特徴の二郎。町中華風な二郎が味わえる。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　西台駅前店',
            'adress' => '〒174-0046 東京都板橋区蓮根3-9-7',
            'opening_hours' => '＜月・火・木・金＞11:00〜13:30／17:30〜21:00＜水＞11:00〜13:30＜土＞9:30〜12:30',
            'closed' => '日曜日、祝日',
            'latitude' => '35.786955',
            'longitude' => '139.674437',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '二郎標準より量が多い店舗。二種類の豚の部位を使用している。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　桜台駅前店',
            'adress' => '〒176-0002 東京都練馬区桜台1-5-1',
            'opening_hours' => '＜月～金＞11:00〜14:00／17:30～21:00＜水・土・日＞10:00～16:00',
            'closed' => '火曜日',
            'latitude' => '35.738791',
            'longitude' => '139.661721',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・ベニ(紅生姜、不定期)',
            'ticket_system' => '食券後買',
            'comment' => '食べやすく、安定した乳化二郎。柔らかめの麺が特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　ひばりヶ丘駅前店',
            'adress' => '〒188-0001 東京都西東京市谷戸町3-27-24 ひばりヶ丘プラザ1F',
            'opening_hours' => '＜平日＞11:30～14:30／18:00～20:30＜土＞11:00～17:00',
            'closed' => '水曜日の夜の部・日曜日、祝日は不定休',
            'latitude' => '35.750688',
            'longitude' => '139.544124',
            'soup_id' => 1,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク',
            'ticket_system' => '食券後買',
            'comment' => '直系二郎の中でもトップレベルの人気を誇る店舗。濃厚な乳化スープと細めの麺、そしてクタ気味な野菜が特徴。',
            'rating_total' => 93,
            'rating_count' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　千住大橋駅前店',
            'adress' => '〒120-0038 東京都足立区千住橋戸町 10-8',
            'opening_hours' => '10:30〜15:30',
            'closed' => '木・土・日・祝日',
            'latitude' => '35.742586',
            'longitude' => '139.797045',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・ラー油',
            'ticket_system' => '食券先買',
            'comment' => 'ラー油コールが通年ある珍しい店舗。二郎標準より柔らかい麺が特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　亀戸店',
            'adress' => '〒136-0071 東京都江東区亀戸4-35-17 エレガントコーポラス101号',
            'opening_hours' => '11:00〜14:00／17:30〜21:00',
            'closed' => '基本無休',
            'latitude' => '35.701941',
            'longitude' => '139.826687',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => 'あっさりでライトな非乳化スープが特徴の二郎。店内にちいかわのフォトスポットがある。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　小岩店',
            'adress' => '〒133-0057 東京都江戸川区西小岩3-31-13',
            'opening_hours' => '10:30～15:30',
            'closed' => '木・土・日・祝',
            'latitude' => '35.73495',
            'longitude' => '139.880038',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '麺固め、柔らかめがどちらも不可な二郎。営業時間が短いので注意が必要',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　環七一之江店',
            'adress' => '〒132-0003 東京都江戸川区一之江8-3-4',
            'opening_hours' => '＜平日＞11:00〜14:00／17:30〜20:30＜土・日・祝＞ 10:00〜14:00',
            'closed' => '水曜日',
            'latitude' => '35.684067',
            'longitude' => '139.881949',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・魚粉',
            'ticket_system' => '列の５~６番目になったら食券を購入',
            'comment' => '通年で提供される汁なしも人気な二郎。甘めなスープが特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　荻窪店',
            'adress' => '〒167-0051 東京都杉並区荻窪4-33-1',
            'opening_hours' => '11:30～14:30／18:00～22:00',
            'closed' => '土日祝',
            'latitude' => '35.703635',
            'longitude' => '139.626324',
            'soup_id' => 1,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '濃いめの乳化スープが特徴の二郎。電子決済に対応している珍し店舗。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　仙川店',
            'adress' => '〒182-0002 東京都調布市仙川町1-10-17',
            'opening_hours' => '17:00～21:00',
            'closed' => '日曜日・祝日',
            'latitude' => '35.661763',
            'longitude' => '139.583897',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券先買',
            'comment' => '生姜の香る黒いスープが特徴の二郎。二郎標準より量が多め。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　府中店',
            'adress' => '〒183-0022 東京都府中市宮西町1-15-5 関野屋ビル1F',
            'opening_hours' => '17:00～22:00',
            'closed' => '土日祝',
            'latitude' => '35.672032',
            'longitude' => '139.477288',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '赤いダイヤと呼ばれるニンジンのカケラが野菜に混入していることで知られる二郎。かつては麺が二郎の中でも最太だったが最近は細くなっている。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　立川店',
            'adress' => '〒190-0023 東京都立川市柴崎町2-10-1',
            'opening_hours' => '11:00〜14:00／17:30〜20:30',
            'closed' => '水曜日・祝日',
            'latitude' => '35.696452',
            'longitude' => '139.40948',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '店内待ち４人、以降は食券購入後外待ち',
            'comment' => '程よく乳化した、甘みあるスープが特徴の二郎。麺が柔らかいのも特徴。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　八王子野猿街道店２',
            'adress' => '〒192-0355 東京都八王子市堀之内2-13-16',
            'opening_hours' => '＜平日＞11:00～15:00／17:30～21:00＜土、祝＞11:00～20:00＜日＞9:00～16:00',
            'closed' => '月曜日',
            'latitude' => '35.629546',
            'longitude' => '139.401372',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => 'チャーシューが厚切りで、全体的にボリューミーな店舗。テーブル席やプチラーメンなどもあり、家族づれや女性客にも優しい店舗。',
            'rating_total' => 94,
            'rating_count' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　めじろ台店',
            'adress' => '〒193-0942 東京都八王子市椚田町513-9',
            'opening_hours' => '＜月〜土＞11:30～14:30／17:30～20:30＜日＞11:00～15:00',
            'closed' => '木曜日・祝日',
            'latitude' => '35.63897',
            'longitude' => '139.312221',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '野菜と豚のコクが溢れるさっぱり甘口のスープが人気の二郎。汁なしやつけ麺などのメニューも豊富。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　一橋学園店',
            'adress' => '〒187-004東京都小平市学園西町2-13-4',
            'opening_hours' => '＜平日＞11:30～14:30／17:30～20:30＜土日＞11:00～16:00',
            'closed' => '木曜日',
            'latitude' => '35.722371',
            'longitude' => '139.479278',
            'soup_id' => 1,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '量が多めで盛り付けも綺麗な二郎。甘みのある微乳化スープが特徴',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　大宮公園駅前店',
            'adress' => '〒330-0805 埼玉県さいたま市大宮区寿能町1-25-1',
            'opening_hours' => '＜月〜土＞11:30〜14:30／17:30〜21:00＜日＞11:00〜15:00',
            'closed' => '水曜日',
            'latitude' => '35.922585',
            'longitude' => '139.632047',
            'soup_id' => 2,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・ショウガ',
            'ticket_system' => '食券後買',
            'comment' => 'ショウガコールがある珍しい店舗。あっさりとした非乳化スープが特徴。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　川越店',
            'adress' => '〒350-1126 埼玉県川越市旭町1-4-15',
            'opening_hours' => '＜火〜土＞11:00〜14:00／18:00〜21:00＜日＞11:00〜14:00',
            'closed' => '月曜日',
            'latitude' => '35.902723',
            'longitude' => '139.476625 ',
            'soup_id' => 1,
            'noodle_id' => 4,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・マヨ（汁なし）・アレ（当日告知）',
            'ticket_system' => '食券後買',
            'comment' => '醤油感のあるマイルドな乳化スープが特徴の二郎。当日にX(旧Twitter)で告知される限定トッッピングがある。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　越谷店',
            'adress' => '〒343-0024 埼玉県越谷市越ヶ谷2-3-7',
            'opening_hours' => '＜月～土＞11:30～20:30＜日＞10:00～15:00',
            'closed' => '日曜日',
            'latitude' => '35.890146',
            'longitude' => '139.787685',
            'soup_id' => 2,
            'noodle_id' => 3,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ・一味',
            'ticket_system' => '食券後買',
            'comment' => '「塩汁なし」というジャンクな汁なしも人気な二郎。コールに一味がある。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('stores')->insert([
            'name' => 'ラーメン二郎　京都店',
            'adress' => '〒606-8117 京都府京都市左京区一乗寺里ノ前町4番',
            'opening_hours' => '＜月～土＞11:00～14:30(木曜のみ14:00まで)／17:30～21:00(日曜のみ20:30)',
            'closed' => '水曜日・不定休',
            'latitude' => '35.043863',
            'longitude' => '135.787525',
            'soup_id' => 1,
            'noodle_id' => 2,
            'call_option' => 'ヤサイ・ニンニク・アブラ・カラメ',
            'ticket_system' => '食券後買',
            'comment' => '関西唯一の直系二郎。トッピングに九条ネギがある。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
