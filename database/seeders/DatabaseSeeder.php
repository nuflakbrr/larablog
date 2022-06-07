<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        \App\Models\User::create([
            'name' => 'Naufal Akbar Nugroho',
            'bio' => 'Saya bersemangat memberikan kontribusi untuk memberikan pengetahuan teknologi bagi semua
            orang!',
            'email' => 'kbrnugroho@gmail.com',
            'password' => bcrypt('password')
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Ini adalah excerpt Judul Pertama',
            'body' => 'Ini adalah body Judul Pertama',
            'published_at' => '2017-01-01 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Ini adalah excerpt Judul Kedua',
            'body' => 'Ini adalah body Judul Kedua',
            'published_at' => '2017-01-02 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Ini adalah excerpt Judul Ketiga',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-03 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Ini adalah excerpt Judul Keempat',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-04 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Kelima',
            'slug' => 'judul-kelima',
            'excerpt' => 'Ini adalah excerpt Judul Kelima',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-05 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Keenam',
            'slug' => 'judul-keenam',
            'excerpt' => 'Ini adalah excerpt Judul Keenam',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-06 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Ketujuh',
            'slug' => 'judul-ketujuh',
            'excerpt' => 'Ini adalah excerpt Judul Ketujuh',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-07 00:00:00',
        ]);

        \App\Models\Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Judul Kedelapan',
            'slug' => 'judul-kedelapan',
            'excerpt' => 'Ini adalah excerpt Judul Kedelapan',
            'body' => 'Ini body Judul Kedua',
            'published_at' => '2017-01-08 00:00:00',
        ]);

        \App\Models\Category::create([
            'name' => 'Kategori Pertama',
            'slug' => 'kategori-pertama'
        ]);
    }
}
