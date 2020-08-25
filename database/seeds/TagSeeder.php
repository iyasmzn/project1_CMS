<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Model\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('en_US');
        for ($i = 0; $i < 50; $i++) {
            Tag::create([
                'name' => $faker->unique()->word,
            ]);
        }
    }
}
