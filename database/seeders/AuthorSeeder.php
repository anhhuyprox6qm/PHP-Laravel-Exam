<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('authors')->truncate();
        \Illuminate\Support\Facades\DB::table('authors')->insert([
            [
                'id' => 1,
                'name' => 'Ernest Miller Hemingway',
            ],
            [
                'id' => 2,
                'name' => 'Franz Kafka',
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
