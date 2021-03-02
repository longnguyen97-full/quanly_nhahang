<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::insert([
            [
                'id_customer' => 1,
                'id_table' => 1,
                'event' => '',
                'numberof_person' => 5,
                'checkin_date' => new Carbon('2016-01-23 11:53:20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_customer' => 1,
                'id_table' => 1,
                'event' => '',
                'numberof_person' => 5,
                'checkin_date' => new Carbon('2016-01-23 11:53:20'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
