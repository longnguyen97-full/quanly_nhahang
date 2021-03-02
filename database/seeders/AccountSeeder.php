<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::insert([
            // root => 1
            [
                'id_position' => 1,
                'username' => 'root',
                'password' => bcrypt(''),
                'parent_id' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // admin => 2
            [
                'id_position' => 2,
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'parent_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // article staff
            [
                'id_position' => 3,
                'username' => 'article_staff_01',
                'password' => bcrypt('123'),
                'parent_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_position' => 3,
                'username' => 'article_staff_01',
                'password' => bcrypt('123'),
                'parent_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // sale staff
            [
                'id_position' => 4,
                'username' => 'sale_staff_01',
                'password' => bcrypt('123'),
                'parent_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_position' => 4,
                'username' => 'sale_staff_02',
                'password' => bcrypt('123'),
                'parent_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
