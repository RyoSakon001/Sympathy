<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        \App\Models\User::factory(19)->create(); // １人分はUserSeeder.phpにてゲストユーザーを作成
        \App\Models\Post::factory(50)->create();
        \App\Models\Comment::factory(300)->create();
        \App\Models\Contact::factory(20)->create();
    }
}
