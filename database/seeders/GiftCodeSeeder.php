<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\GiftCode;

class GiftCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GiftCode::insert([
            [
                'giftcode' => 'HPNY2021',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'description' => "30.000 VND discount on sale items",
                'discount' => 30000,
                'discount_percent' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'giftcode' => 'SORAE2021YEAR',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'description' => "Save 30% on your 200.000 VND order",
                'discount' => 30,
                'discount_percent' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'giftcode' => 'FREESHIP',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'description' => "Free shipping on all orders over 100.000 VND",
                'discount' => 0,
                'discount_percent' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
