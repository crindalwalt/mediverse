<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed 10 categories in health domain
        Category::factory()->create([
            "name" => "Men Health",
            "slug" => "men-health"
        ]);


        Category::factory()->create([
            "name" => "Women Health",
            "slug" => "women-health"
        ]);

        Category::factory()->create([
            "name" => "Child Health",
            "slug" => "child-health"
        ]);

        Category::factory()->create([
            "name" => "Mental Health",
            "slug" => "mental-health"
        ]);

        Category::factory()->create([
            "name" => "Nutrition",
            "slug" => "nutrition"
        ]);
        Category::factory()->create([
            "name" => "Fitness",
            "slug" => "fitness"
        ]);
        Category::factory()->create([
            "name" => "Diseases",
            "slug" => "diseases"
        ]);
        Category::factory()->create([
            "name" => "Medications",
            "slug" => "medications"
        ]);
        Category::factory()->create([
            "name" => "Wellness",
            "slug" => "wellness"
        ]);
    }
}
