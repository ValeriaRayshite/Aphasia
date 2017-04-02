<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Aphasia\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ArticleSeeder::class);
    }
}


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();
        Article::create([
        	'slug' => 'First-post',
        	'title' => 'First post',
        	'content' => '1111111111111111111111111111111111111111111111111111111',
        	'published' => true,



        ]);

        Article::create([
        	'slug' => 'Second-post',
        	'title' => 'Second post',
        	'content' => '22222222222222222222222222222222222222222222222222222222',
        	'published' => false,



        ]);

        Article::create([
        	'slug' => 'Theerd-post',
        	'title' => 'Theerd post',
        	'content' => '333333333333333333333333333333333333333333333333333333333',
        	'published' => true,



        ]);
    }
}
