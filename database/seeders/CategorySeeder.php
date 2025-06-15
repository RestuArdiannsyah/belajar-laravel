<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    Category::factory(3)->create();

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'bg-blue-100',
        ]);

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'color' => 'bg-red-100',
        ]);

        Category::create([
            'name' => 'Health',
            'slug' => 'health',
            'color' => 'bg-green-100',
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
            'color' => 'bg-purple-100',
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'food',
            'color' => 'bg-orange-100',
        ]);
    }
}
