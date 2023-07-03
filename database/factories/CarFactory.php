<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Car ' . $this->faker->name,
            'model' => 'Model ' . $this->faker->name,
            'year' => $this->faker->date(),
        ];
    }
}
