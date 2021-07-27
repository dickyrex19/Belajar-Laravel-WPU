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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dicky J',
            'email' => 'dickyjuniansyahputra19@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Renn',
            'email' => 'renn@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate repellendus aliquam consequatur, doloribus fuga et ex tempora a nostrum eaque minima similique asperiores praesentium! Vel aliquam, cum minus aspernatur fugit sunt, commodi eveniet perspiciatis, asperiores repudiandae quidem dolorum non reiciendis suscipit quia voluptatem doloribus aperiam est blanditiis accusantium earum esse minima unde voluptatum.</p> <p>Eum temporibus hic rerum, rem ipsum totam cumque, a sed voluptatibus error dolore maiores necessitatibus dolorem quaerat iure minus odit facilis. Nisi corrupti laudantium explicabo eum eius dolorum minima ipsam! Maxime architecto dolor iusto unde incidunt eos, quis sed perferendis!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate repellendus aliquam consequatur, doloribus fuga et ex tempora a nostrum eaque minima similique asperiores praesentium! Vel aliquam, cum minus aspernatur fugit sunt, commodi eveniet perspiciatis, asperiores repudiandae quidem dolorum non reiciendis suscipit quia voluptatem doloribus aperiam est blanditiis accusantium earum esse minima unde voluptatum.</p> <p>Eum temporibus hic rerum, rem ipsum totam cumque, a sed voluptatibus error dolore maiores necessitatibus dolorem quaerat iure minus odit facilis. Nisi corrupti laudantium explicabo eum eius dolorum minima ipsam! Maxime architecto dolor iusto unde incidunt eos, quis sed perferendis!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate repellendus aliquam consequatur, doloribus fuga et ex tempora a nostrum eaque minima similique asperiores praesentium! Vel aliquam, cum minus aspernatur fugit sunt, commodi eveniet perspiciatis, asperiores repudiandae quidem dolorum non reiciendis suscipit quia voluptatem doloribus aperiam est blanditiis accusantium earum esse minima unde voluptatum.</p> <p>Eum temporibus hic rerum, rem ipsum totam cumque, a sed voluptatibus error dolore maiores necessitatibus dolorem quaerat iure minus odit facilis. Nisi corrupti laudantium explicabo eum eius dolorum minima ipsam! Maxime architecto dolor iusto unde incidunt eos, quis sed perferendis!</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempore quis explicabo eos sequi, blanditiis voluptate repellendus aliquam consequatur, doloribus fuga et ex tempora a nostrum eaque minima similique asperiores praesentium! Vel aliquam, cum minus aspernatur fugit sunt, commodi eveniet perspiciatis, asperiores repudiandae quidem dolorum non reiciendis suscipit quia voluptatem doloribus aperiam est blanditiis accusantium earum esse minima unde voluptatum.</p> <p>Eum temporibus hic rerum, rem ipsum totam cumque, a sed voluptatibus error dolore maiores necessitatibus dolorem quaerat iure minus odit facilis. Nisi corrupti laudantium explicabo eum eius dolorum minima ipsam! Maxime architecto dolor iusto unde incidunt eos, quis sed perferendis!</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
