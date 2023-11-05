<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
