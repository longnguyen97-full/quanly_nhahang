<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::insert([
            [
                'position' => 'Soraesushi System',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'position' => 'Administrator',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'position' => 'Article Staff',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'position' => 'Sale Staff',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
