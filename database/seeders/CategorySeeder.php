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
        Category::create([
            'name' => 'mobile'
        ]);
        Category::create([
            'name' => 'watch'
        ]);
        Category::create([
            'name' => 'tv'
        ]);
        Category::create([
            'name' => 'perfumes'
        ]);
        Category::create([
            'name' => 'dress'
        ]);
    }
}
