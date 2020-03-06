<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'title' => 'boss',
            'company_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'worker',
            'email' => 'worker@mail.com',
            'password' => Hash::make('worker'),
            'role' => 'worker',
            'title' => 'programmer',
            'company_id' => 1,
        ]);
    }
}
