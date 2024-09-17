<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class NoodleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('noodles')->insert([
                'noodle' => '二郎標準よりかなり細い',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
         
        DB::table('noodles')->insert([
                'noodle' => '二郎標準より細い',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('noodles')->insert([
                'noodle' => '二郎標準',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('noodles')->insert([
                'noodle' => '二郎標準より太い',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
