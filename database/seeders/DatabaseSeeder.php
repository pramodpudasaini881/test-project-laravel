<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'img' => '/assets/pic1.jpg',
            'brand' => 'Nike',
            'title' => 'Air Max 2024',
            'rating' => 4.5,
            'reviews' => 120,
            'sellPrice' => 150.00,
            'category' => 'men',
        ]);

        \App\Models\Product::create([
            'img' => '/assets/pic2.jpg',
            'brand' => 'Adidas',
            'title' => 'Ultraboost 5.0',
            'rating' => 4.8,
            'reviews' => 85,
            'sellPrice' => 180.00,
            'category' => 'women',
        ]);
    }
}
