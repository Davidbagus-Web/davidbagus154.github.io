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
        

        User::create([
            'name' => 'David Bagus',
            'username' => 'davidbagus',
            'email' => 'davidbagus154@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //User::create([
          //  'name' => 'Divad Sugab',
            //'email' => 'divadsugab154@gmail.com',
            //'password' => bcrypt('12345')
       // ]);

       User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus. Eaque ratione repellat velit tempora itaque fuga pariatur, voluptatibus deleniti officia beatae. Aspernatur natus fugiat vero, repellendus aperiam architecto delectus officiis expedita, dignissimos quibusdam eaque ad, molestias a id. Nobis non nisi dolorum nam debitis. Itaque rem et sunt ab sapiente recusandae consequatur voluptatibus voluptatum, eaque quidem minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus. Eaque ratione repellat velit tempora itaque fuga pariatur, voluptatibus deleniti officia beatae. Aspernatur natus fugiat vero, repellendus aperiam architecto delectus officiis expedita, dignissimos quibusdam eaque ad, molestias a id. Nobis non nisi dolorum nam debitis. Itaque rem et sunt ab sapiente recusandae consequatur voluptatibus voluptatum, eaque quidem minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus. Eaque ratione repellat velit tempora itaque fuga pariatur, voluptatibus deleniti officia beatae. Aspernatur natus fugiat vero, repellendus aperiam architecto delectus officiis expedita, dignissimos quibusdam eaque ad, molestias a id. Nobis non nisi dolorum nam debitis. Itaque rem et sunt ab sapiente recusandae consequatur voluptatibus voluptatum, eaque quidem minima.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius optio, quisquam nulla dignissimos nemo aliquid voluptatum in, totam eum ex laboriosam repellendus. Eaque ratione repellat velit tempora itaque fuga pariatur, voluptatibus deleniti officia beatae. Aspernatur natus fugiat vero, repellendus aperiam architecto delectus officiis expedita, dignissimos quibusdam eaque ad, molestias a id. Nobis non nisi dolorum nam debitis. Itaque rem et sunt ab sapiente recusandae consequatur voluptatibus voluptatum, eaque quidem minima.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
