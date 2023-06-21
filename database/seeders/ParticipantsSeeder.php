<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            'conversation_id' => 1,
            'users_id' => 1,
            'type' => 0,
            'created_at' => '2010-01-03 04:30:43',
            'deleted_at' => null,
        ]);

        DB::table('participants')->insert([
            'conversation_id' => 1,
            'users_id' => 2,
            'type' => 0,
            'created_at' => '2010-01-03 04:30:43',
            'deleted_at' => null,
        ]);
    }
}