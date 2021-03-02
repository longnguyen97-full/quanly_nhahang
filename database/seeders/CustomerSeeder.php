<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
            [
                'fullname' => 'Nguyễn Văn Giang',
                'address' => '135 Nguyễn Hữu Cảnh, phường 22, Bình Thạnh, Hồ Chí Minh',
                'phone' => '081127985',
                'avatar' => '',
                'email' => 'giangnguyen2000@gmail.com',
                'password' => bcrypt('123'),
                'reward_point' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Dương Văn Hà',
                'address' => '25 Ung Văn Khiêm, phường 25, Bình Thạnh, Hồ Chí Minh',
                'phone' => '03579432',
                'avatar' => '',
                'email' => 'duongvanha95@gmail.com',
                'password' => bcrypt('123'),
                'reward_point' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Hoàng Thúy Hạnh',
                'address' => 'Trần Hưng Đạo, Phường Nguyễn Cư Trinh, Quận 1, Hồ Chí Minh',
                'phone' => '05378921',
                'avatar' => '',
                'email' => 'hoanghanh90@gmail.com',
                'password' => bcrypt('123'),
                'reward_point' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
