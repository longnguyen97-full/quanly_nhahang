<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::insert([
            [
                'id_widget' => 1,
                'title' => 'Online Shop',
                'link' => '',
                'parent_id' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Reservation',
                'link' => '',
                'parent_id' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Expands',
                'link' => '',
                'parent_id' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Blog',
                'link' => 'blog',
                'parent_id' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // => 1 2 3 4

            // CHILD
            [
                'id_widget' => 1,
                'title' => 'Menu',
                'link' => 'menu',
                'parent_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Product',
                'link' => 'product',
                'parent_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Signature',
                'link' => 'signature',
                'parent_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Contact Form',
                'link' => 'contact',
                'parent_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Book a table',
                'link' => 'reservation',
                'parent_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Event and Promotion',
                'link' => 'event',
                'parent_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Gallery',
                'link' => 'gallery',
                'parent_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_widget' => 1,
                'title' => 'Career',
                'link' => 'career',
                'parent_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
