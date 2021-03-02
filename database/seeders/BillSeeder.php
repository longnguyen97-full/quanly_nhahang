<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Bill;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::insert([
            [
                'id_account' => 4,
                'id_order_detail' => 1,
                'id_customer' => 1,
                'content' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_account' => 4,
                'id_order_detail' => 1,
                'id_customer' => 1,
                'content' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_account' => 4,
                'id_order_detail' => 1,
                'id_customer' => 1,
                'content' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
