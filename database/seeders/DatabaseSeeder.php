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
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     PostSeeder::class
        // ]);
        
        User::create([
            'name' => 'Herdi Apriansyah',
            'email' => 'laplacedemon9@gmail.com',
            'password' => bcrypt('1234')
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);
        
        Category::create([
            'name' => 'Anime & Manga',
            'slug' => 'anime-&-manga'
        ]);

        Post::create([
            'title' => 'Mengunjungi Paris Van Java',
            'slug' => 'mengunjungi-paris-van-java',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? ',
            'body' => '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? Ipsam perferendis provident molestias porro, itaque aliquid exercitationem unde perspiciatis. Nesciunt necessitatibus excepturi tempora.</p> <p>Delectus, eveniet possimus voluptas atque repellendus sit eaque explicabo placeat, consequatur dicta quis vero nesciunt corporis aut laboriosam unde ad, quia dolore. Minima maxime quas iusto fugit voluptates asperiores repudiandae odio nobis molestias nemo libero inventore sint mollitia consequuntur illo fuga obcaecati soluta omnis, sed in ratione aperiam sapiente aliquam voluptatibus.</p> <p>Doloribus earum odio possimus iste accusantium ipsam perspiciatis laudantium veniam odit quam! Necessitatibus, exercitationem illo quia quod cumque explicabo. Dolorum iure, vitae illum excepturi rerum cum est, magnam necessitatibus alias ratione quaerat aliquam aspernatur.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Berkunjung ke Kota Garut',
            'slug' => 'berkunjung-ke-kota-garut',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? ',
            'body' => '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? Ipsam perferendis provident molestias porro, itaque aliquid exercitationem unde perspiciatis. Nesciunt necessitatibus excepturi tempora.</p> <p>Delectus, eveniet possimus voluptas atque repellendus sit eaque explicabo placeat, consequatur dicta quis vero nesciunt corporis aut laboriosam unde ad, quia dolore. Minima maxime quas iusto fugit voluptates asperiores repudiandae odio nobis molestias nemo libero inventore sint mollitia consequuntur illo fuga obcaecati soluta omnis, sed in ratione aperiam sapiente aliquam voluptatibus.</p> <p>Doloribus earum odio possimus iste accusantium ipsam perspiciatis laudantium veniam odit quam! Necessitatibus, exercitationem illo quia quod cumque explicabo. Dolorum iure, vitae illum excepturi rerum cum est, magnam necessitatibus alias ratione quaerat aliquam aspernatur.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Rekomendasi Anime Saat Bulan Ramadhan',
            'slug' => 'rekomendasi-anime-saat-bulan-ramadhan',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? ',
            'body' => '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Veritatis odio aliquid id debitis perferendis odit, accusamus nesciunt voluptates ipsa, quo sit? Ipsam perferendis provident molestias porro, itaque aliquid exercitationem unde perspiciatis. Nesciunt necessitatibus excepturi tempora.</p> <p>Delectus, eveniet possimus voluptas atque repellendus sit eaque explicabo placeat, consequatur dicta quis vero nesciunt corporis aut laboriosam unde ad, quia dolore. Minima maxime quas iusto fugit voluptates asperiores repudiandae odio nobis molestias nemo libero inventore sint mollitia consequuntur illo fuga obcaecati soluta omnis, sed in ratione aperiam sapiente aliquam voluptatibus.</p> <p>Doloribus earum odio possimus iste accusantium ipsam perspiciatis laudantium veniam odit quam! Necessitatibus, exercitationem illo quia quod cumque explicabo. Dolorum iure, vitae illum excepturi rerum cum est, magnam necessitatibus alias ratione quaerat aliquam aspernatur.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}

