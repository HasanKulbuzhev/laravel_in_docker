<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Mail\Transport\SesTransport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        #DB::table('questions')->delete();
        DB::table('questions')->insert([
            [ 'uuid'=> Str::uuid(),'user_id' => 1, 'data' => '{ "title" : "test_value", "test2" : "test_value2" }', 'created_at' => now() ],
            [ 'uuid'=> Str::uuid(),'user_id' => 2, 'data' => '{ "test" : "test_value", "title" : "test_value2" }', 'created_at' => now()  ],
            [ 'uuid'=> Str::uuid(),'user_id' => 1, 'data' => '{ "test" : "shaurma", "title" : "deadpool" }', 'created_at' => now()  ],
        ]);
    }
}
