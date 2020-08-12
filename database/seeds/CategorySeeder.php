<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create([
            'name' => 'Education',
        ]);
        Category::create([
            'name' => 'Sport',
        ]);
        Category::create([
            'name' => 'Crime',
        ]);
        Category::create([
            'name' => 'Gadget',
        ]);
        Category::create([
            'name' => 'Politic',
        ]);
        Category::create([
            'name' => 'Artist',
        ]);
    }
}
