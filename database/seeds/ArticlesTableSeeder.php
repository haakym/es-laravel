<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->truncate();
        factory(App\Article::class, 50)->create();
    }
}
