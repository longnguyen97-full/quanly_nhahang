<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::insert([
            [
                'id_customer' => '1',
                'title' => 'toi la khach 1',
                'content' => 'toi la khach 1',
                'image' => 'toi la khach 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_customer' => '2',
                'title' => 'toi la khach 2',
                'content' => 'toi la khach 2',
                'image' => 'toi la khach 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_customer' => '3',
                'title' => 'toi la khach 3',
                'content' => 'toi la khach 3',
                'image' => 'toi la khach 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
