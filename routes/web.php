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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Angga Kusuma",
        "email" => "angga.213040074@mail.unpas.ac.id",
        "image" => "Me.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Angga Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum! Possimus minima aut facere ipsa natus voluptas neque, sint suscipit! Facere consectetur placeat, impedit earum labore quae. Sequi, asperiores dolor."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Anggi Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum! Possimus minima aut facere ipsa natus voluptas neque, sint suscipit! Facere consectetur placeat, impedit earum labore quae. Sequi, asperiores dolor."        
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Angga Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum! Possimus minima aut facere ipsa natus voluptas neque, sint suscipit! Facere consectetur placeat, impedit earum labore quae. Sequi, asperiores dolor."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Anggi Kusuma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, ipsum! Possimus minima aut facere ipsa natus voluptas neque, sint suscipit! Facere consectetur placeat, impedit earum labore quae. Sequi, asperiores dolor."        
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});


