<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/Blog', function() {
    $posts = [
        [
            'title' => 'judul pertama',
            'slug' => 'judul-pertama',
            'author' => 'Herdi Apriansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi adipisci accusantium. Ab temporibus eum in suscipit blanditiis eius officia minus ut ea magni architecto, fugit esse. Excepturi quasi consequatur sapiente! Commodi eligendi rerum, nostrum odit expedita molestiae hic eveniet suscipit fugiat obcaecati esse modi aut autem, inventore a exercitationem aperiam consequuntur. Exercitationem cupiditate obcaecati inventore voluptatem illum distinctio beatae, provident at quod non assumenda culpa enim, debitis voluptates animi corporis veritatis ab similique explicabo laudantium. Sunt iusto ut cum vitae similique, ullam fugit expedita molestiae quos animi eum.'
        ], 
        [
            'title' => 'judul kedua',
            'slug' => 'judul-kedua',
            'author' => 'aldi firmansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam corporis tempora dolorem ad consequatur eum eligendi fugiat possimus et totam repellendus cumque illo, nulla nemo, perspiciatis culpa, quos magni impedit ratione voluptas cupiditate animi. Error earum incidunt blanditiis amet architecto doloribus? Magni, rerum veniam maiores dolore exercitationem excepturi obcaecati sed hic illum, unde quam quaerat amet cumque enim reprehenderit. Debitis, iusto quod exercitationem excepturi unde repellendus dicta obcaecati necessitatibus, laudantium quam assumenda veritatis. Voluptates modi earum provident ullam mollitia, odio eius aut soluta eaque repellendus, libero officiis dicta quia hic porro repellat explicabo natus culpa obcaecati ex! Nemo, vero quas!'
        ]
        
    ];
    return view('blog', [
        'title' => 'Blog',
        'posts' => $posts
    ]);
});
