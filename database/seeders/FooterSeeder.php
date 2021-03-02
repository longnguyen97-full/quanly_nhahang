<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::insert([
            [
                'id_widget' => 2,
                'title' => 'About Us',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => '',
                'copyright' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => 'Recent Blog',
                'content' => '',
                'image' => '',
                'copyright' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => 'Services',
                'content' => '',
                'image' => '',
                'copyright' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => 'Have a Questions?',
                'content' => '',
                'image' => '',
                'copyright' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 2,
                'title' => '',
                'content' => 'Copyright ©2020 All rights reserved | This template is made with by Colorlib',
                'image' => '',
                'copyright' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
