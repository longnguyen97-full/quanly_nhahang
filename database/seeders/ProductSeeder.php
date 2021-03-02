<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            // drink = 1
            [
                'id_menu' => '1',
                'name' => 'Cocktail',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/drink_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Red wine',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 120000,
                'display' => 1,
                'image' => 'user/images/drink_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Orange',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 20000,
                'display' => 1,
                'image' => 'user/images/drink_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Sochu',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 80000,
                'display' => 1,
                'image' => 'user/images/drink_4.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Heineken',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/drink_5.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Tiger',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 45000,
                'display' => 1,
                'image' => 'user/images/drink_6.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Sting',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 15000,
                'display' => 1,
                'image' => 'user/images/drink_7.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => '7 up',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 15000,
                'display' => 1,
                'image' => 'user/images/drink_8.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Pepsi',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 15000,
                'display' => 1,
                'image' => 'user/images/drink_9.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '1',
                'name' => 'Dasani',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 10000,
                'display' => 1,
                'image' => 'user/images/drink_10.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // appetizer = 7
            [
                'id_menu' => '7',
                'name' => 'appetizer 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/appetizer_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '7',
                'name' => 'appetizer 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/appetizer_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '7',
                'name' => 'appetizer 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/appetizer_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '7',
                'name' => 'appetizer 04',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/appetizer_4.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '7',
                'name' => 'appetizer 05',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/appetizer_5.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // bento = 8
            [
                'id_menu' => '8',
                'name' => 'bento 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/bento_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/bento_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/bento_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 04',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/bento_4.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 05',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/bento_5.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 06',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/bento_6.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '8',
                'name' => 'bento 07',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 85000,
                'display' => 1,
                'image' => 'user/images/bento_7.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // dessert = 9
            [
                'id_menu' => '9',
                'name' => 'dessert 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 43000,
                'display' => 1,
                'image' => 'user/images/dessert_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '9',
                'name' => 'dessert 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 42000,
                'display' => 1,
                'image' => 'user/images/dessert_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '9',
                'name' => 'dessert 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 40000,
                'display' => 1,
                'image' => 'user/images/dessert_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // dish = 10
            [
                'id_menu' => '10',
                'name' => 'main dish 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 120000,
                'display' => 1,
                'image' => 'user/images/dish_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '10',
                'name' => 'main dish 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 130000,
                'display' => 1,
                'image' => 'user/images/dish_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '10',
                'name' => 'main dish 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 125000,
                'display' => 1,
                'image' => 'user/images/dish_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // fried = 11
            [
                'id_menu' => '11',
                'name' => 'fried 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/fried_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/fried_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 86000,
                'display' => 1,
                'image' => 'user/images/fried_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 04',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/fried_4.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 05',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/fried_5.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 06',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 82000,
                'display' => 1,
                'image' => 'user/images/fried_6.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '11',
                'name' => 'fried 07',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/fried_7.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // maki = 12
            [
                'id_menu' => '12',
                'name' => 'maki 01',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 85000,
                'display' => 1,
                'image' => 'user/images/maki_1.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 02',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 84000,
                'display' => 1,
                'image' => 'user/images/maki_2.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 03',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 83000,
                'display' => 1,
                'image' => 'user/images/maki_3.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 04',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 81000,
                'display' => 1,
                'image' => 'user/images/maki_4.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 05',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 82000,
                'display' => 1,
                'image' => 'user/images/maki_5.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 06',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 85000,
                'display' => 1,
                'image' => 'user/images/maki_6.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '12',
                'name' => 'maki 07',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 80000,
                'display' => 1,
                'image' => 'user/images/maki_7.jpg',
                'homepage' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // combo menu = 13
            [
                'id_menu' => '13',
                'name' => 'Combo menu 1',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 450000,
                'display' => 1,
                'image' => 'user/images/menu_1.jpg',
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '13',
                'name' => 'Combo menu 2',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 470000,
                'display' => 1,
                'image' => 'user/images/menu_2.jpg',
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '13',
                'name' => 'Combo menu 3',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 460000,
                'display' => 1,
                'image' => 'user/images/menu_3.jpg',
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_menu' => '13',
                'name' => 'Combo menu 4',
                'description' => 'Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.',
                'price' => 450000,
                'display' => 1,
                'image' => 'user/images/menu_4.jpg',
                'homepage' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
