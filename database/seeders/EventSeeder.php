<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'title' => 'Giáng sinh tưng bừng',
                'content' => '',
                'image' => '',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Giao thừa hạnh phúc',
                'content' => '',
                'image' => '',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mừng năm mới với nhiều ưu đãi',
                'content' => '',
                'image' => '',
                'start_date' => new Carbon('2016-01-23 11:53:20'),
                'expiry_date' => new Carbon('2016-01-23 11:53:20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
