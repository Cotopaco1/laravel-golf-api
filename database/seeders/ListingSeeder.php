<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        $listings = [
            [
                'title' => 'TaylorMade Qi Driver',
                'price' => 900,
                'description' => 'Explosive distance and high forgiveness with the new Carbon Twist Face technology.',
                'condition' => 'like_new',
                'end_date' => '2026-01-10 19:57:34',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(3),
            ],
            [
                'title' => 'Callaway Paradym Driver',
                'price' => 820,
                'description' => 'High launch and low spin driver designed for speed and stability across the face.',
                'condition' => 'new',
                'end_date' => '2026-01-11 15:20:00',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeek(),
            ],
            [
                'title' => 'Ping G430 Max Driver',
                'price' => 780,
                'description' => 'Maximum MOI driver offering consistent ball speed and tighter dispersion.',
                'condition' => 'used',
                'end_date' => '2026-01-12 10:00:00',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(5),
            ],

            [
                'title' => 'Titleist TSR2 Fairway Wood',
                'price' => 420,
                'description' => 'Fairway wood built for easy launch, speed, and stable flight from any lie.',
                'condition' => 'like_new',
                'end_date' => '2026-01-10 20:30:00',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'TaylorMade Stealth 2 Fairway Wood',
                'price' => 390,
                'description' => 'Fast fairway wood with a low CG for strong launch and reliable carry.',
                'condition' => 'used',
                'end_date' => '2026-01-11 09:15:00',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeeks(2),
            ],
            [
                'title' => 'Cobra AeroJet Fairway Wood',
                'price' => 350,
                'description' => 'Aerodynamic shaping focused on speed with a forgiving face across strikes.',
                'condition' => 'refurbished',
                'end_date' => '2026-01-12 18:45:00',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(7),
            ],

            [
                'title' => 'Ping G430 Hybrid',
                'price' => 260,
                'description' => 'Easy-to-hit hybrid with high launch and consistent spin for gapping.',
                'condition' => 'like_new',
                'end_date' => '2026-01-10 21:10:00',
                'category_id' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(4),
            ],
            [
                'title' => 'Callaway Apex Hybrid',
                'price' => 240,
                'description' => 'Players hybrid that blends workability with forgiveness and fast ball speed.',
                'condition' => 'used',
                'end_date' => '2026-01-11 13:40:00',
                'category_id' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeeks(3),
            ],
            [
                'title' => 'Titleist TSR3 Hybrid',
                'price' => 280,
                'description' => 'Adjustable hybrid engineered for precise flight control and strong carry.',
                'condition' => 'new',
                'end_date' => '2026-01-12 11:25:00',
                'category_id' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(12),
            ],

            [
                'title' => 'Nike Driving Iron 18°',
                'price' => 190,
                'description' => 'Driving iron built for penetrating flight and control off the tee.',
                'condition' => 'used',
                'end_date' => '2026-01-10 22:00:00',
                'category_id' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(2),
            ],
            [
                'title' => 'TaylorMade UDI Driving Iron',
                'price' => 210,
                'description' => 'Utility driving iron with hollow construction for speed and launch.',
                'condition' => 'like_new',
                'end_date' => '2026-01-11 16:05:00',
                'category_id' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeek()->subDays(2),
            ],
            [
                'title' => 'Titleist U505 Driving Iron',
                'price' => 230,
                'description' => 'Forgiving utility iron offering high ball speed and a confidence-inspiring profile.',
                'condition' => 'refurbished',
                'end_date' => '2026-01-12 19:30:00',
                'category_id' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(15),
            ],

            [
                'title' => 'Mizuno JPX 923 Iron Set',
                'price' => 680,
                'description' => 'Forged irons delivering buttery feel, distance, and tight dispersion.',
                'condition' => 'like_new',
                'end_date' => '2026-01-10 23:10:00',
                'category_id' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(6),
            ],
            [
                'title' => 'TaylorMade P790 Iron Set',
                'price' => 720,
                'description' => 'Players distance irons with a hollow body design for speed and feel.',
                'condition' => 'used',
                'end_date' => '2026-01-11 17:50:00',
                'category_id' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeeks(4),
            ],
            [
                'title' => 'Titleist T200 Iron Set',
                'price' => 760,
                'description' => 'Tour-inspired irons with added forgiveness and high launch for consistent gapping.',
                'condition' => 'new',
                'end_date' => '2026-01-12 12:10:00',
                'category_id' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(8),
            ],

            [
                'title' => 'Cleveland RTX 6 ZipCore Wedge 56°',
                'price' => 150,
                'description' => 'Tour-proven wedge with enhanced spin and control around the greens.',
                'condition' => 'used',
                'end_date' => '2026-01-10 18:30:00',
                'category_id' => 6,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(1),
            ],
            [
                'title' => 'Titleist Vokey SM9 Wedge 60°',
                'price' => 170,
                'description' => 'Precision-milled wedge offering exceptional spin and shot versatility.',
                'condition' => 'like_new',
                'end_date' => '2026-01-11 14:00:00',
                'category_id' => 6,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeeks(2)->subDays(3),
            ],

            [
                'title' => 'Odyssey White Hot OG Putter',
                'price' => 220,
                'description' => 'Classic insert feel with modern shaping for consistent roll.',
                'condition' => 'used',
                'end_date' => '2026-01-10 20:00:00',
                'category_id' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->subDays(9),
            ],
            [
                'title' => 'Scotty Cameron Phantom X Putter',
                'price' => 480,
                'description' => 'Premium milled putter delivering balance, feel, and tour-level performance.',
                'condition' => 'new',
                'end_date' => '2026-01-12 16:40:00',
                'category_id' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->subWeeks(5),
            ],
        ];

        Listing::query()->insert($listings);

    }
}
