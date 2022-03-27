<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into role_user (user_id, role_id) values (?,?)',[1,1]);
        DB::insert('insert into role_user (user_id, role_id) values (?,?)',[2,2]);
    }
}
