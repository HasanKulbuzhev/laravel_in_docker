<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #DB::table('users')->delete();
        DB::table('users')->insert([
            ['name' => 'best_candidate', 'email' => 'ashatkfhcj@gmail.com', 'password' => Hash::make('best'), 'is_admin' => 1,],
            ['name' => 'vinni_puh','email' => 'ashatkfhcj@gmail.com', 'password' => Hash::make('123'),'is_admin' => 1],
        ]);
    }
}
