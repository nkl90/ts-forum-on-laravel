<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    private array $iconNames = [
        'folder_announce.gif', 'folder_big_3.gif', 'folder_games_1.svg',
        'folder_lock.gif', 'shopping_cart_1.svg',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return  [
            'id' => $this->faker->uuid,
            'title' => $this->faker->sentence,
            'icon' => $this->iconNames[rand(0, count($this->iconNames) - 1)],
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
