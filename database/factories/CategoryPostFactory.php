<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_id = Category::pluck('id');
        $post_id = Post::pluck('id');

        return [
            //
            'category_id' => $category_id[rand(1,18)],
            'post_id' => $post_id[rand(1,59)]
        ];
    }
}
