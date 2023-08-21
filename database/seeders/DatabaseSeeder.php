<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::insert([
            ['title' => 'romance', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'drama', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'action', 'created_at' => now(), 'updated_at' => now()]
        ]);

        Movie::insert([
            ['title' => 'before sunrise', 'year' => 1995, 'img' => 'R-BS.jpg', 'id_category' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'lucy', 'year' => 2014, 'img' => 'A-L.jpg', 'id_category' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'stronger', 'year' => 2017, 'img' => 'D-S.jpg', 'id_category' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'nobody', 'year' => 2021, 'img' => 'A-NB.jpg', 'id_category' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => '303', 'year' => 2018, 'img' => 'R-303.jpg', 'id_category' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'nocturnal animals', 'year' => 2016, 'img' => 'D-NA.jpg', 'id_category' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'before we go', 'year' => 2014, 'img' => 'R-BW.jpg', 'id_category' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'nightcrawler', 'year' => 2014, 'img' => 'D-NC.jpg', 'id_category' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'drive', 'year' => 2011, 'img' => 'A-D.jpg', 'id_category' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'prisoners', 'year' => 2013, 'img' => 'D-P.jpg', 'id_category' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
