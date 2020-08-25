<?php

use App\Model\Article;
use App\Model\Comment;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $f             = Factory::create('en_US');
        $articles      = Article::count();
        for ($i = 0; $i < 100; $i++) {
            Comment::create([
            	'article_id' => rand(1, $articles),
            	'name' => $f->name(),
            	'body' => $f->realText(),
            ]);
        }
    }
}
