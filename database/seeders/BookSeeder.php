<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'bookId' => 1,
                'authorId' => 1,
                'title' => 'Five Gifts for the Mind',
                'ISBN' => 'ISBN 388053101-1',
                'pub_year' => 2016,
                'available' => 1,
            ],
            [
                'bookId' => 2,
                'authorId' => 1,
                'title' => 'Where Did Noah Park the Ark? Ancient Memory Techniques',
                'ISBN' => 'ISBN 388053101-2',
                'pub_year' => 2010,
                'available' => 1,
            ],
            [
                'bookId' => 3,
                'authorId' => 1,
                'title' => 'Süper Hafizanin Sirlari',
                'ISBN' => 'ISBN 388053101-3',
                'pub_year' => 2001,
                'available' => 1,
            ],
            [
                'bookId' => 4,
                'authorId' => 1,
                'title' => 'Trí tuệ Do Thái',
                'ISBN' => 'ISBN 388053101-4',
                'pub_year' => 2010,
                'available' => 1,
            ],
            [
                'bookId' => 5,
                'authorId' => 1,
                'title' => 'Bí mật của một trí nhớ siêu phàm',
                'ISBN' => 'ISBN 388053101-5',
                'pub_year' => 2010,
                'available' => 1,
            ],
            [
                'bookId' => 6,
                'authorId' => 2,
                'title' => 'Sức mạnh của hiện tại',
                'ISBN' => 'ISBN 388053101-6',
                'pub_year' => 1997,
                'available' => 1,
            ],
            [
                'bookId' => 7,
                'authorId' => 2,
                'title' => 'Thức tỉnh mục đích sống',
                'ISBN' => 'ISBN 388053101-7',
                'pub_year' => 2005,
                'available' => 1,
            ],
            [
                'bookId' => 8,
                'authorId' => 2,
                'title' => 'Sức mạnh của tĩnh lặng',
                'ISBN' => 'ISBN 388053101-8',
                'pub_year' => 2003,
                'available' => 1,
            ],
            [
                'bookId' => 9,
                'authorId' => 2,
                'title' => 'Practicing the Power of Now',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 1999,
                'available' => 1,
            ],
            [
                'bookId' => 10,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Inspirational Selections...',
                'ISBN' => 'ISBN 388053101-10',
                'pub_year' => 2008,
                'available' => 1,
            ],

        ]);
    }
}
