<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'best_candidate',
            'email' => 'adshatkfhcj@gmail.com',
            'password' => 'best',
            'is_admin' => 1,
        ]);
    }
}
