<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'body' => $this->faker->randomElement([
                'Nice post!', 
                'Great article.', 
                'Thanks for sharing!', 
                'Interesting thoughts.', 
                'Very helpful, thanks!', 
                'Awesome!', 
                'Thanks!',
                'Cool',
                'thanks',
                'THANKS.',
                'tHanks!!!'
            ]),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
