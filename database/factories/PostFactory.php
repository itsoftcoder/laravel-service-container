<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::pluck('id');
        return [
            //
            'name' => $this->faker->sentence(),
            'user_id' => $user_id[rand(1,15)],
            'slug' => $this->faker->slug(),
            'description' => $this->randomHtml(2,5),
            'is_published' => rand(0,1),
            'views' => rand(1,100),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
