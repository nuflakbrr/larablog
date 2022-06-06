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

        \App\Models\Category::create([
            'name' => 'Kategori Pertama',
            'slug' => 'kategori-pertama'
        ]);
    }
}
