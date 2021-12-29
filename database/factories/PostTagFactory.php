<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tag_id = Tag::pluck('id');
        $post_id = Post::pluck('id');

        return [
            //
            'post_id' => $post_id[rand(1,58)],
            'tag_id' => $tag_id[rand(1,12)],
        ];
    }
}
