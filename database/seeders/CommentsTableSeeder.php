<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'user_id' => 1,
                'comment' => 'This is the first comment on the first post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 1,
                'user_id' => 2,
                'comment' => 'This is another comment on the first post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 2,
                'user_id' => 1,
                'comment' => 'This is a comment on the second post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 2,
                'user_id' => 2,
                'comment' => 'This is another comment on the second post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 3,
                'user_id' => 1,
                'comment' => 'This is a comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 3,
                'user_id' => 2,
                'comment' => 'This is another comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 6,
                'user_id' => 3,
                'comment' => 'This is a comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 6,
                'user_id' => 1,
                'comment' => 'This is another comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 4,
                'user_id' => 1,
                'comment' => 'This is a comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 4,
                'user_id' => 2,
                'comment' => 'This is another comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 5,
                'user_id' => 1,
                'comment' => 'This is a comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'post_id' => 5,
                'user_id' => 2,
                'comment' => 'This is another comment on the third post.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
