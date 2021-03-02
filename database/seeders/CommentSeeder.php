<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            [
                'content' => 'bai viet rat hay',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'content' => 'toi thich cai nay',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'content' => 'toi khonog thich cai nay',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
