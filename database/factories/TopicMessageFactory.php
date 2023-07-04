<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\TopicMessageAuthor;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => function () {
                return TopicMessageAuthor::inRandomOrder()->first()->id;
            },
            'topic_id' => function () {
                return Topic::inRandomOrder()->first()->id;
            },
            'content' => $this->faker->text(150)
        ];
    }
}
