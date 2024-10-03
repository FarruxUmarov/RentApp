<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = ['male', 'female'];
        DB::table('ads')->insert([
            'title' => Str::random(25),
            'description' => Str::random(25),
            'price' => rand(10, 100),
            'rooms' => rand(1, 5),
            'address' => Str::random(50),
            'gender' => $genders[array_rand($genders)],
            'branch_id' => 1,
            'status_id' => 1,
            'user_id' => 1,
        ]);
    }
}
