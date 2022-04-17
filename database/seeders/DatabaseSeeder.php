<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
// use Database\Seeders\PostSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        
        Category::create([
            'name' => 'Anime & Manga',
            'slug' => 'anime-&-manga'
        ]);

       Post::factory(13)->create();

    }
}

