<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = fake()->dateTimeBetween();
        $updated = fake()->dateTimeBetween($created);
        if(rand(0, 9)){
            $updated = $created;
        }
        // $image = null;
        // if(rand(0, 9)) {
        //     $image = 'https://picsum.photos/seed/' . fake()->unique()->uuid . '/640/480';
        // }

        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(6, true),
            'created_at' => fake()->dateTimebetween(),
            'updated_at' => fake()->dateTimebetween(),
            // 'image' => $image,
        ];
    }
}
