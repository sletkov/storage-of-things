<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(2),
            'description' => $this->faker->sentence(10),
            'master' => 'sletkovsemen@gmail.com',
            'place_id' => random_int(1,10),
        ];
    }
}
