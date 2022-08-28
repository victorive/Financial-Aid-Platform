<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'story' => $this->faker->paragraph(),
            'amount' => $this->faker->numberBetween(10000, 100000),
            'image' => $this->faker->image('public/storage/images', 640, 480)
        ];
    }
}
