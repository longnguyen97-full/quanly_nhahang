<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            [
                'id_customer' => 1,
                'status' => 1,
                'order_date' => new Carbon('2016-01-23 11:53:20'),
                'giftcode' => '',
                'payment_method' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_customer' => 1,
                'status' => 1,
                'order_date' => new Carbon('2016-01-23 11:53:20'),
                'giftcode' => '',
                'payment_method' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_customer' => 1,
                'status' => 1,
                'order_date' => new Carbon('2016-01-23 11:53:20'),
                'giftcode' => '',
                'payment_method' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
