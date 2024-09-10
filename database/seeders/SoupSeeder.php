<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SoupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('soup_prefs')->insert([
            'soup' => '乳化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('soup_prefs')->insert([
            'soup' => '非乳化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
