<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::insert([
            [
                'id_widget' => 2,
                'title' => 'slide',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/bg_1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => 'slide 2',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/bg_2.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => 'slide 3',
                'content' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.',
                'image' => 'user/images/bg_3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]            
        ]);
    }
}
