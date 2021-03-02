<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Payment_Method;

class Payment_MethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment_Method::insert([
            [
                'total_price' => 0,
                'payment_type' => 'CASH',
                'payment_icon' => 'fas fa-money-bill',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'total_price' => 0,
                'payment_type' => 'DIGITAL WALLET',
                'payment_icon' => 'fas fa-wallet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'total_price' => 0,
                'payment_type' => 'MASTER CARD',
                'payment_icon' => 'fab fa-cc-mastercard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'total_price' => 0,
                'payment_type' => 'VISA CARD',
                'payment_icon' => 'fab fa-cc-visa',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
