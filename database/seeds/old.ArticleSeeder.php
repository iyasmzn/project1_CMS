<?php

use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $f                = Factory::create('en_US');
        $users_count      = User::count();
        $categories_count = Category::count();
        for ($i = 0; $i < 100; $i++) {
            $title = $f->realText($maxNbChars = 20, $indexSize = 2);
            Article::create([
                'user_id'     => ($i % $users_count) + 1,
                'category_id' => rand(1, $categories_count),
                'title'       => $title,
                'content'     => $f->realText(),
                'slug'        => Str::of($title)->slug('-'),
                'image'       => 'example.jpg'  
            ]);
        }
    }
}
