<?php

namespace Database\Seeders;

use Database\Factories\CategoryPostFactory;
use Database\Factories\PostTagFactory;
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
        // \App\Models\User::factory(20)->create();
        // \App\Models\category::factory(20)->create();
        // \App\Models\Tag::factory(20)->create();
        // \App\Models\Post::factory(60)->create();
        // \App\Models\CategoryPost::factory(100)->create();
        \App\Models\PostTag::factory(200)->create();
       
        
    }
}
