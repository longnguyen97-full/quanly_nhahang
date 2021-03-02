<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'name' => 'Drink menu',
                'description' => 'There are a variety of drinks, such as cocktails, beers, waters, soft drinks, etc...',
                'image' => 'user/images/menu_5.jpg',
                'homepage' => 1,
                'display' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Delivery menu',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'A La Carte',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Set lunch',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Set Dinner',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SORAE’s Happy Hour Menu',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // => 1 -> 6

            [
                'name' => 'Appetizer',
                'description' => 'There are a variety of drinks appetizers',
                'image' => 'user/images/menu_1.jpg',
                'homepage' => 0,
                'display' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Bento',
                'description' => 'There are a variety of drinks bentos',
                'image' => 'user/images/menu_4.jpg',
                'homepage' => 0,
                'display' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dessert',
                'description' => '',
                'image' => '',
                'homepage' => 1,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Main Dish',
                'description' => '',
                'image' => '',
                'homepage' => 1,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fried',
                'description' => 'There are a variety of drinks frieds',
                'image' => 'user/images/menu_2.jpg',
                'homepage' => 0,
                'display' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Maki',
                'description' => 'There are a variety of drinks makies',
                'image' => 'user/images/menu_3.jpg',
                'homepage' => 0,
                'display' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Combo menu',
                'description' => '',
                'image' => '',
                'homepage' => 0,
                'display' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]

            // => 7 -> 13
        ]);
    }
}
