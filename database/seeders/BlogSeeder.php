<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::insert([
            [
                'id_blg_cate' => 1,
                'id_account' => 1,
                'title' => 'The Delicious Pizza 1',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/image_1.jpg',
                'display' => 1,
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_blg_cate' => 1,
                'id_account' => 1,
                'title' => 'The Delicious Pizza 2',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/image_2.jpg',
                'display' => 1,
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_blg_cate' => 1,
                'id_account' => 1,
                'title' => 'The Delicious Pizza 3',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/image_3.jpg',
                'display' => 1,
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
