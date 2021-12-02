<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

              $insert = [
            [
                'title' => 'CONSTRUCTION',
                'image' => 'construction.png',
                'sort_order' => 1,
                'slug_url' => Str::slug('CONSTRUCTION','-'),
            ],
            [
                'title' => 'TRADING',
                'image' => 'trading.png',
                'sort_order' => 2,
                'slug_url' => Str::slug('TRADING','-'),
            ],
            [
                'title' => 'CONSULTANCY',
                'image' => 'consultancy.png',
                'sort_order' => 3,
                'slug_url' => Str::slug('CONSULTANCY','-'),
            ],
            [
                'title' => 'PROPERTIES',
                'image' => 'properties.png',
                'sort_order' => 4,
                'slug_url' => Str::slug('PROPERTIES','-'),
            ],
            [
                'title' => 'CONSTRUCTION SERVICES',
                'image' => 'constructionServices.png',
                'sort_order' => 5,
                'slug_url' => Str::slug('CONSTRUCTION SERVICES','-'),
            ],
            [
                'title' => 'TRAVEL & LEISURE',
                'image' => 'travel.png',
                'sort_order' => 6,
                'slug_url' => Str::slug('TRAVEL & LEISURE','-'),
            ],
            [
                'title' => 'PERFORMANCE CARS',
                'image' => 'performanceCars.png',
                'sort_order' => 7,
                'slug_url' => Str::slug('PERFORMANCE CARS','-'),
            ],
            [
                'title' => 'EQUINE',
                'image' => 'equine.png',
                'sort_order' => 8,
                'slug_url' => Str::slug('EQUINE','-'),
            ],

            ];


         $category =   Category::insert($insert);
    }
}
