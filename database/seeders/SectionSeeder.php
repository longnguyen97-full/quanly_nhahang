<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::insert([
            [
                'id_widget' => 3,
                'title' => '000 (123) 456 7890',
                'content' => 'A small river named Duden flows by their place and supplies.',
                'image' => 'icon-phone',
                'background' => '',
                'display' => 1,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '198 West 21th Street',
                'content' => '203 Fake St. Mountain View, San Francisco, California, USA',
                'image' => 'icon-my_location',
                'background' => '',
                'display' => 1,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Open Monday-Friday',
                'content' => '8:00am - 9:00pm',
                'image' => 'icon-clock-o',
                'background' => '',
                'display' => 1,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Our Story',
                'content' => 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
                would have been rewritten a thousand times and everything that was left from its origin would be
                the word "and" and the Little Blind Text should turn around and return to its own, safe country.
                But nothing the copy said could convince her and so it didn’t take long until a few insidious
                Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                agency, where they abused her for their.',
                'image' => 'user/images/about.jpg',
                'background' => '',
                'display' => 2,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Easy to Order',
                'content' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                'image' => 'flaticon-choices',
                'background' => '',
                'display' => 3,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Fastest Delivery',
                'content' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                'image' => 'flaticon-delivery-truck',
                'background' => '',
                'display' => 3,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Quality Coffee',
                'content' => 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.',
                'image' => 'flaticon-coffee-bean',
                'background' => '',
                'display' => 3,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Our Menu',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                'image' => 'user/images/menu_1.jpg;user/images/menu_2.jpg;user/images/menu_3.jpg;user/images/menu_4.jpg',
                'background' => '',
                'display' => 4,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '100',
                'content' => 'Coffee Branches',
                'image' => 'flaticon-coffee-cup',
                'background' => 'user/images/menu_1.jpg',
                'display' => 5,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '85',
                'content' => 'Number of Awards',
                'image' => 'flaticon-coffee-cup',
                'background' => '',
                'display' => 5,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '10,567',
                'content' => 'Happy Customer',
                'image' => 'flaticon-coffee-cup',
                'background' => '',
                'display' => 5,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '900',
                'content' => 'Staff',
                'image' => 'flaticon-coffee-cup',
                'background' => '',
                'display' => 5,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Best Coffee Sellers',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => '',
                'background' => '',
                'display' => 6,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => '',
                'content' => '',
                'image' => '',
                'background' => '',
                'display' => 7,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Our Products',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => '',
                'background' => '',
                'display' => 8,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Customers Says',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => '',
                'background' => 'user/images/bg_1.jpg',
                'display' => 9,
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 3,
                'title' => 'Recent from blog',
                'content' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
                'image' => '',
                'background' => '',
                'display' => 10,
                'homepage' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
