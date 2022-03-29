<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$B2bx2vx/J05Dra.5wrEN1uVUShsHVUaw0TKmOep2knxzSX1kZZErG', // '00000000'をハッシュ化した数値
            'remember_token' => Str::random(10),
        ],[
            'name' => 'guest',
            'email' => 'guest@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$B2bx2vx/J05Dra.5wrEN1uVUShsHVUaw0TKmOep2knxzSX1kZZErG', // '00000000'をハッシュ化した数値
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert($data);
    }
}
