<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => '0',
            'title' => 'First Title',
            'slug' => 'first-title',
            'author' => 'Herdi Apriansyah',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum et dolore exercitationem id necessitatibus,',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum et dolore exercitationem id necessitatibus, </p><p>iusto soluta rem quia placeat nulla ratione dolores ipsam! Voluptatibus nulla obcaecati illum odio veniam! Eveniet, quos architecto minus itaque iste vero assumenda atque quo veniam necessitatibus. Qui facere nesciunt at nostrum laudantium culpa est unde expedita. Dignissimos amet repudiandae distinctio blanditiis</p><p> excepturi, veritatis voluptatem eum architecto, officiis sint modi, vel magnam qui itaque labore dolores. Modi, voluptatibus veniam. Numquam consequatur illo totam ea, ducimus accusamus. Sunt, praesentium quam! Labore, tempora repellat. Earum ullam quos, deleniti voluptates eaque consequuntur, libero fugit ipsa voluptatum officia, natus vitae?</p>'
        ]);
    }
}
