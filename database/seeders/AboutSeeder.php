<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            [
                'title' => 'SORAE – “Little Tokyo” in Ho Chi Minh City',
                'content' => '“Sorae” – Above the sky, exactly what its name implies, the Japanese restaurant has one of the most breath-taking views and is the ideal rendezvous in the inner Saigon. Located in the 24th and 25th floor of AB Tower (76 Le Lai, District 1), our topmost gourmet food style is a must-known get-together place of food lovers. Sorae would be the ideal rendezvous for giving Japanese’s culinary delights a try and drowning in Japanese subcultures in the middle of Saigon. Sora restaurant is renowned not only for its sashimi from the fresh source of ingredients (either fished domestically or directly delivered from famous Tsukiji and Osaka seafood market in Japan) but also for Yakitori & Beer Kitchen corner – The provenance of grilled Wagyu and Angus steak above the charcoal for your best aftertaste. With the great deal passion of 20 topmost chefs, every cuisine is an artwork that conceives the pure Japanese taste.',
                'image' => 'user/images/bento_1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The luxurious private dining room system',
                'content' => 'At night or special occasions, Sorae exclusively offers VIP private dining room for diners. Each one is orientated toward a divergent theme, conveys the diversified experience. Diners, as a result, fathom out more about Japanese culture and traditions. At Sorae, we offer totally 14 rooms with respectively distinctive themes: Ryotei, Bonsai, Sakura, Ginza, Fujiyama, Zen, Geisha, Niwa, Yozora, Misora, Hinata, Hoshi, Shinju, Koi.',
                'image' => 'user/images/bento_2.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The opening Sushi & Sake corner',
                'content' => 'The only Sushi & Sake bar exhibits well-known Sake collections and imported fresh seafood from Japan. Here at the corner, diners are able to contemplate the stunning Sashimi preparation of our chefs.',
                'image' => 'user/images/bento_3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'A step from Sushi Bar, Yakitori & Beer',
                'content' => 'A step from Sushi Bar, Yakitori & Beer is also one of our spotlights. Diners can both savor distinctive Yakitori skewer meat and regard mastery Japanese chefs, who are skilfully grilling Wagyu beef, bacon, fish and so on.',
                'image' => 'user/images/bento_4.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
