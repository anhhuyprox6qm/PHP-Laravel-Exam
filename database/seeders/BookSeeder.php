<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'bookid' => 1,
                'authorid' => 1,
                'title' => 'In Search of Lost Time',
                'ISBN' => 'GPMN-182021',
                'pub_year' => 2021,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 2,
                'authorid' => 2,
                'title' => 'Ulysses',
                'ISBN' => 'GPMN-282021',
                'pub_year' => 2022,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 3,
                'authorid' => 3,
                'title' => 'Don Quixote',
                'ISBN' => 'GPMN-382021',
                'pub_year' => 2023,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 4,
                'authorid' => 4,
                'title' => 'One Hundred Years of Solitude',
                'ISBN' => 'GPMN-482021',
                'pub_year' => 2024,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 5,
                'authorid' => 5,
                'title' => 'The Great Gatsby',
                'ISBN' => 'GPMN-582021',
                'pub_year' => 2025,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 6,
                'authorid' => 6,
                'title' => ' Moby Dick',
                'ISBN' => 'GPMN-682021',
                'pub_year' => 2026,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 7,
                'authorid' => 7,
                'title' => ' War and Peace',
                'ISBN' => 'GPMN-782021',
                'pub_year' => 2027,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 8,
                'authorid' => 8,
                'title' => 'Hamlet',
                'ISBN' => 'GPMN-882021',
                'pub_year' => 2028,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 9,
                'authorid' => 9,
                'title' => 'The Odyssey',
                'ISBN' => 'GPMN-982021',
                'pub_year' => 2029,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'bookid' => 10,
                'authorid' => 10,
                'title' => 'Madame Bovary',
                'ISBN' => 'GPMN-082021',
                'pub_year' => 2030,
                'available' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
