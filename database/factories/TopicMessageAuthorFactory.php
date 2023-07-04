<?php

namespace Database\Factories;

use App\Models\Topic;
use App\Models\TopicMessageAuthor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicMessageAuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userIds = User::pluck('id')->toArray();
        $userId = $this->faker->unique()->randomElement($userIds);
        return [
            'user_id' => $userId,
            'signature' => $this->faker->sentence,
        ];
    }
}
