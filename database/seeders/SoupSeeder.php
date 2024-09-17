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
        DB::table('soups')->insert([
            'soup' => '乳化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('soups')->insert([
            'soup' => '非乳化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('soups')->insert([
            'soup' => '微乳化',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
