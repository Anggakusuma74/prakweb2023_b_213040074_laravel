<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Muhammad Angga Kusuma',
        //     'email' => 'angga.213040074@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Anggi Kusuma',
        //     'email' => 'anggi.213040075@mail.unpas.ac.id',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima! Dolores labore omnis libero facere sapiente fuga quia incidunt quasi fugit praesentium error nisi, ullam harum veniam? Atque non voluptatum officiis quia nam beatae accusantium repudiandae, quibusdam deleniti unde alias. Sapiente consequatur, veritatis sequi delectus, at quis repellat dolorem eligendi accusantium odio doloremque harum, molestiae provident aperiam? Eligendi totam corporis esse minus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima! Dolores labore omnis libero facere sapiente fuga quia incidunt quasi fugit praesentium error nisi, ullam harum veniam? Atque non voluptatum officiis quia nam beatae accusantium repudiandae, quibusdam deleniti unde alias. Sapiente consequatur, veritatis sequi delectus, at quis repellat dolorem eligendi accusantium odio doloremque harum, molestiae provident aperiam? Eligendi totam corporis esse minus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima! Dolores labore omnis libero facere sapiente fuga quia incidunt quasi fugit praesentium error nisi, ullam harum veniam? Atque non voluptatum officiis quia nam beatae accusantium repudiandae, quibusdam deleniti unde alias. Sapiente consequatur, veritatis sequi delectus, at quis repellat dolorem eligendi accusantium odio doloremque harum, molestiae provident aperiam? Eligendi totam corporis esse minus.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ea labore ratione rem repudiandae, numquam vitae harum, accusamus, necessitatibus modi quam impedit! Debitis hic aut, ut velit molestiae ullam doloremque mollitia harum earum amet neque et quos vero ipsam ex, fugiat quod exercitationem rerum nam optio, repudiandae minima! Dolores labore omnis libero facere sapiente fuga quia incidunt quasi fugit praesentium error nisi, ullam harum veniam? Atque non voluptatum officiis quia nam beatae accusantium repudiandae, quibusdam deleniti unde alias. Sapiente consequatur, veritatis sequi delectus, at quis repellat dolorem eligendi accusantium odio doloremque harum, molestiae provident aperiam? Eligendi totam corporis esse minus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}


