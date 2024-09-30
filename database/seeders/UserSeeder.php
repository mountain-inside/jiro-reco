<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Sample1',
            'email' => 'nozomi.kaikei@icloud.com',
            'password' => Hash::make('LianKaran0327'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Sample2',
            'email' => 'Sample2@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
